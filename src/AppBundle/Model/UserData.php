<?php
/**
 * Created by PhpStorm.
 * User: maze
 * Date: 25/05/17
 * Time: 20:01
 */

namespace AppBundle\Model;


use AppBundle\Entity\Alumno;

class UserData
{

    function __construct(Alumno $alumno, $numPartes, $numSanciones, $numVisitasConvivencia)
    {
        $this->alumno = $alumno;
        $this->numPartes = $numPartes;
        $this->numSanciones = $numSanciones;
        $this->numVisitasConvivencia = $numVisitasConvivencia;
    }

    /**
     * @return Alumno
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * @return mixed
     */
    public function getNumPartes()
    {
        return $this->numPartes;
    }

    /**
     * @return mixed
     */
    public function getNumSanciones()
    {
        return $this->numSanciones;
    }

    /**
     * @return mixed
     */
    public function getNumVisitasConvivencia()
    {
        return $this->numVisitasConvivencia;
    }

}