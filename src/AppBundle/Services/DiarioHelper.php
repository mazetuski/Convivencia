<?php
/**
 * Created by PhpStorm.
 * User: maze
 * Date: 9/05/17
 * Time: 17:12
 */

namespace AppBundle\Services;


use AppBundle\Entity\DiarioAulaConvivencia;
use AppBundle\Model\DiarioData;
use AppBundle\Repository\DiarioAulaConvivenciaRepository;
use Doctrine\ORM\EntityManager;

class DiarioHelper
{

    function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Función que devuelve los diarios de una fecha y unas horas
     * @param \DateTime $fecha
     * @param $horas
     * @return array
     */
    public function getDiariosAula(\DateTime $fecha, $horas){
        /** @var DiarioAulaConvivenciaRepository $repositoryDiario */
        $repositoryDiario = $this->em->getRepository('AppBundle:DiarioAulaConvivencia');
        $arrDiariosAula = array();
        foreach ($horas as $hora) {
            $diariosAula = $repositoryDiario->getDiarioByFechaYHora($fecha, $hora);
            foreach ($diariosAula as $diario)
                $arrDiariosAula[] = $diario;
        }
        return $arrDiariosAula;
    }

    /**
     * Función que crea un nuevo Modelo DiarioData
     * @param \DateTime $fecha
     * @param $horas
     * @param $horasElegidas
     * @return DiarioData
     */
    public function getDiarioData(\DateTime $fecha, $horasElegidas, $horas){
        $diariosAula = $this->getDiariosAula($fecha, $horasElegidas);
        return new DiarioData($diariosAula, $horas, $horasElegidas, $fecha);
    }

}