<?php

namespace AppBundle\Repository;
use AppBundle\Entity\Alumno;

/**
 * SancionesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SancionesRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * Función que devuelve las Sanciones por estado
     * @param string $estado
     * @return array
     */
    public function getSancionesPorEstado($estado = 'Iniciada', $sortDate = true)
    {

        if ($sortDate)
            $query = $this->getEntityManager()->createQuery(
                'SELECT s
                 FROM AppBundle\Entity\Sanciones s
                 WHERE s.idEstado in 
                 (SELECT e.id
                  FROM AppBundle\Entity\EstadosSancion e
                  WHERE e.estado = :estado)
                 ORDER BY s.fecha DESC'
            );
        else
            $query = $this->getEntityManager()->createQuery(
                'SELECT s
               FROM AppBundle\Entity\Sanciones s
               WHERE s.idEstado in 
               (SELECT e.id
                FROM AppBundle\Entity\EstadosSancion e
                WHERE e.estado = :estado)'
            );
        $query->setParameter('estado', $estado);
        return $query->getResult();
    }

    /**
     * Función que devuelve las sanciones ordenadas por fecha
     * @return array
     */
    public function getSancionesOrdenadas($historico = false)
    {
        if(!$historico) {
            $query = $this->getEntityManager()->createQuery(
                "SELECT s
                 FROM AppBundle\Entity\Sanciones s
                 JOIN s.idEstado as estado
                 WHERE estado.estado != 'Finalizada'
                 ORDER BY s.fecha DESC"
            );
        }else{
            $query = $this->getEntityManager()->createQuery(
                'SELECT s
                 FROM AppBundle\Entity\Sanciones s
                 ORDER BY s.fecha DESC'
            );
        }
        return $query->getResult();
    }

    /**
     * Función que devuelve las sanciones que contienen la cadena pasada por parámetro
     * @param $string
     * @return array
     */
    public function getSancionesLike($string, $historico = false)
    {
        if ($string == '')
            return $this->getSancionesOrdenadas($historico);
        if (!$historico) {
            $query = $this->getEntityManager()->createQuery(
                "SELECT s
             FROM AppBundle\Entity\Sanciones s
             JOIN s.idAlumno as alumno
             JOIN s.idTipo as tipo
             JOIN s.idEstado as estado
             WHERE (s.fecha LIKE :string OR alumno.nombre LIKE :string
             OR tipo.tipo LIKE :string)
             AND estado.estado != 'Finalizada'
             ORDER BY s.fecha DESC"
            );
        }
        else{
            $query = $this->getEntityManager()->createQuery(
                "SELECT s
             FROM AppBundle\Entity\Sanciones s
             JOIN s.idAlumno as alumno
             JOIN s.idTipo as tipo
             JOIN s.idEstado as estado
             WHERE (s.fecha LIKE :string OR alumno.nombre LIKE :string
             OR tipo.tipo LIKE :string)
             ORDER BY s.fecha DESC"
            );
        }
        $query->setParameter("string", '%' . $string . '%');
        return $query->getResult();
    }


    /**
     * Función que devuelve las sanciones no finalizadas de un alumno
     * @param Alumno $alumno
     * @return array
     */
    public function getSancionesNoFinalizadas(Alumno $alumno)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT s
                 FROM AppBundle\Entity\Sanciones s
                 WHERE s.idAlumno = :alumno AND s.idEstado IN
                  (SELECT e.id
                FROM AppBundle\Entity\EstadosSancion e
                WHERE e.estado != :estadoFinalizado)'
        );
        $query->setParameter('alumno', $alumno->getId());
        $query->setParameter('estadoFinalizado', 'Finalizada');
        return $query->getResult();
    }

}
