<?php

namespace AppBundle\Services;

use AppBundle\Entity\DetalleDiarioSancionHora;
use AppBundle\Entity\DiarioAulaConvivencia;
use AppBundle\Entity\Sanciones;
use AppBundle\Repository\DetalleDiarioSancionHoraRepository;
use AppBundle\Repository\DiarioAulaConvivenciaRepository;
use AppBundle\Repository\SancionesRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;

class CrearSancionHelper
{

    const HORAS_CLASE = array(
        '1' => '8:15 - 9:15',
        '2' => '9:15 - 10:15',
        '3' => '10:15 - 11-15',
        '4' => '11:40 - 12:40',
        '5' => '12:40 - 13:40',
        '6' => '13:40 - 14:40',
    );

    const SANCION_TYPE_HORAS = 5;
    const SANCION_TYPE_JORNADA = 2;

    function __construct(EntityManager $em)
    {
        $this->em = $em;
        /** @var DiarioAulaConvivenciaRepository $repositoryDetalleDiario */
        $this->repositoryDiario = $this->em->getRepository('AppBundle:DiarioAulaConvivencia');
    }

    /**
     * Función que devuelve una sanción en función de la respuesta recibida
     * @param Request $request
     * @return Sanciones
     */
    public function getSancionFromRequest(Request $request)
    {
        /** @var SancionesRepository $repositorySancion */
        $repositorySancion = $this->em->getRepository("AppBundle:Sanciones");
        if ($request->query->has('idSancion'))
            return $repositorySancion->findOneById($request->get('idSancion'));
        else
            return new Sanciones();
    }

    /**
     * Función que devuelve los diarios segun una sanción
     * @param Sanciones $sancion
     */
    public function getDiarioFromSancion(Sanciones $sancion)
    {
        if ($sancion != null && $sancion->getIdTipo() != null && $sancion->getIdTipo()->getId() == self::SANCION_TYPE_HORAS)
            return $this->repositoryDiario->findByIdSancion($sancion->getId());
        else
            return null;
    }

    /**
     * Función que crea diarios a traves de una sanción
     * @param Sanciones $sancion
     * @param Request $request
     */
    public function creaDiarioFromSancion(Sanciones $sancion, Request $request)
    {
        if ($sancion->getIdTipo()->getId() == self::SANCION_TYPE_HORAS) {
            if ($request->request->has('horaAc')) {
                $horas = $request->get('horaAc');
                $fechas = $request->get('fechaHora');
                foreach ($horas as $key => $hora) {
                    $diarioAula = new DiarioAulaConvivencia();
                    $diarioAula->setIdSancion($sancion);
                    $this->persistDiario($diarioAula, $hora, $fechas, $key);
                }
                $this->em->flush();
            }
            if ($request->request->has('horaAcEdit')) {
                $horas = $request->get('horaAcEdit');
                $fechas = $request->get('fechaHoraEdit');
                foreach ($horas as $key => $hora) {
                    /** @var DiarioAulaConvivencia $diarioAulaEdit */
                    $diarioAulaEdit = $this->repositoryDiario->findOneById($key);
                    $this->persistDiario($diarioAulaEdit, $hora, $fechas, $key);
                }
                $this->em->flush();
            }
        } elseif ($sancion->getIdTipo()->getId() == self::SANCION_TYPE_JORNADA) {
            if ($sancion->getFechaInicio() < $sancion->getFechaFinal())
                for ($i = $sancion->getFechaInicio(); $i <= $sancion->getFechaFinal();
                     $i = date_add($i, date_interval_create_from_date_string('1 day'))) {
                    foreach (self::HORAS_CLASE as $hora => $valor) {
                        $diarioAula = new DiarioAulaConvivencia();
                        $diarioAula->setIdSancion($sancion);
                        $this->persistDiario($diarioAula, $hora, $i, null, false);
                    }
                    $this->em->flush();
                }
        }
    }

    /**
     * Función que persiste un diario en función de los parámetros
     * @param DiarioAulaConvivencia $diarioAula
     * @param $hora
     * @param $fechas
     * @param $key
     * @param bool $format
     */
    public function persistDiario(DiarioAulaConvivencia $diarioAula, $hora, $fechas, $key, $format = true)
    {
        $diarioAula->setHora($hora);
        if ($format) {
            $fecha = \DateTime::createFromFormat('d/m/Y', $fechas[$key]);
            $diarioAula->setFecha($fecha);
        } else
            $diarioAula->setFecha($fechas);
        $diarioAula->setAsiste(0);
        $this->em->persist($diarioAula);
    }

    /**
     * Función que devuelve una hora de clase a partir de una fecha
     * @param \DateTime $fecha
     */
    public function getHoraFromDate(\DateTime $fecha)
    {
        $hora = intval($fecha->format('H'));
        $min = intval($fecha->format('i'));
        if ($hora < 8)
            return 1;
        if ($hora > 14 || ($hora == 14 && $min > 40)) {
            $fecha = date_add($fecha, date_interval_create_from_date_string('1 day'));
            $fecha->setTime(8, 15);
            return $this->getHoraFromDate($fecha);
        }
        if (($hora == 14 && $min <= 40) || ($hora == 13 && $min >= 40))
            return 6;

        foreach (self::HORAS_CLASE as $keyHoras => $arrayhoraClase) {
            $arrayhoraClase = explode(' - ', $arrayhoraClase);
            foreach ($arrayhoraClase as $key => $horaClase)
                if ($key == 0) {
                    $horaDate = explode(':', $horaClase)[0];
                    $minDate = explode(':', $horaClase)[1];
                    if ($hora == $horaDate) {
                        if ($min >= $minDate) {
                            $horaFromDate = $keyHoras;
                        } else
                            $horaFromDate = ($hora != 8) ? $keyHoras - 1 : 1;
                        return $horaFromDate;
                    }
                }
        }
    }
}