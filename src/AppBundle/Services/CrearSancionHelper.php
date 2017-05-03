<?php

namespace AppBundle\Services;

use AppBundle\Entity\DetalleDiarioSancionHora;
use AppBundle\Entity\Sanciones;
use AppBundle\Repository\DetalleDiarioSancionHoraRepository;
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
        /** @var DetalleDiarioSancionHoraRepository $repositoryDetalleDiario */
        $this->repositoryDetalleDiario = $this->em->getRepository('AppBundle:DetalleDiarioSancionHora');
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
     * Función que devuelve los detalles segun una sanción
     * @param Sanciones $sancion
     */
    public function getDetallesFromSancion(Sanciones $sancion)
    {
        if ($sancion != null && $sancion->getIdTipo() != null && $sancion->getIdTipo()->getId() == self::SANCION_TYPE_HORAS)
            return $this->repositoryDetalleDiario->findByIdSancion($sancion->getId());
        else
            return null;
    }

    /**
     * Función que crea detalles a traves de una sanción
     * @param Sanciones $sancion
     * @param Request $request
     */
    public function creaDetallesFromSancion(Sanciones $sancion, Request $request)
    {
        if ($sancion->getIdTipo()->getId() == self::SANCION_TYPE_HORAS) {
            if ($request->request->has('horaAc')) {
                $horas = $request->get('horaAc');
                $fechas = $request->get('fechaHora');
                foreach ($horas as $key => $hora) {
                    $detalleDiario = new DetalleDiarioSancionHora();
                    $detalleDiario->setIdSancion($sancion);
                    $this->persistDetalleDiario($detalleDiario, $hora, $fechas, $key);
                }
                $this->em->flush();
            }
            if ($request->request->has('horaAcEdit')) {
                $horas = $request->get('horaAcEdit');
                $fechas = $request->get('fechaHoraEdit');
                foreach ($horas as $key => $hora) {
                    /** @var DetalleDiarioSancionHora $detalleDiarioEdit */
                    $detalleDiarioEdit = $this->repositoryDetalleDiario->findOneById($key);
                    $this->persistDetalleDiario($detalleDiarioEdit, $hora, $fechas, $key);
                }
                $this->em->flush();
            }
        } elseif ($sancion->getIdTipo()->getId() == self::SANCION_TYPE_JORNADA) {
            if ($sancion->getFechaInicio() < $sancion->getFechaFinal())
                for ($i = $sancion->getFechaInicio(); $i <= $sancion->getFechaFinal();
                     $i = date_add($i, date_interval_create_from_date_string('1 day'))) {
                    foreach (self::HORAS_CLASE as $hora => $valor) {
                        $detalleDiario = new DetalleDiarioSancionHora();
                        $detalleDiario->setIdSancion($sancion);
                        $this->persistDetalleDiario($detalleDiario, $hora, $i, null, false);
                    }
                    $this->em->flush();
                }
        }
    }

    /**
     * Función que persiste un detalle diario en función de los parámetros
     * @param DetalleDiarioSancionHora $detalleDiario
     * @param $hora
     * @param $fechas
     * @param $key
     * @param bool $format
     */
    public function persistDetalleDiario(DetalleDiarioSancionHora $detalleDiario, $hora, $fechas, $key, $format = true)
    {
        $detalleDiario->setHora($hora);
        if ($format) {
            $fecha = \DateTime::createFromFormat('d/m/Y', $fechas[$key]);
            $detalleDiario->setFecha($fecha);
        }else
            $detalleDiario->setFecha($fechas);
        $this->em->persist($detalleDiario);
    }

}