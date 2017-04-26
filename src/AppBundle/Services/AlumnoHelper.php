<?php

namespace AppBundle\Services;

use AppBundle\Entity\Alumno;
use Doctrine\ORM\EntityManager;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Entity\Usuarios;

class AlumnoHelper
{

    function __construct(EntityManager $emConvivencia)
    {
        $this->emConvivencia = $emConvivencia;
    }

    /**
     * Función que devuelve el alumno logueado.
     *
     * @param Usuarios $user
     * @return Alumno|AlumnoRepository
     */
    public function getAlumnoLogueado(Usuarios $user){
        /** @var AlumnoRepository $alumno */
        $repositoryAlumno = $this->emConvivencia->getRepository('AppBundle:Alumno');
        /** @var Alumno $alumno */
        $alumno = $repositoryAlumno->findOneByidUsuario($user);
        return $alumno;
    }

    /**
     * Función que devuelve si un alumno existe
     * @param Usuarios $user
     * @return bool
     */
    public function alumnoExists(Usuarios $user){
        /** @var AlumnoRepository $alumno */
        $repositoryAlumno = $this->emConvivencia->getRepository('AppBundle:Alumno');
        /** @var Alumno $alumno */
        $alumno = $repositoryAlumno->findOneByidUsuario($user);
        if($alumno==null)
            return false;
        return true;

    }

    /**
     * Función que devuelve los puntos del alumno logeado
     * @param Usuarios $user
     * @return int
     */
    public function getPuntosAlumnoLogin(Usuarios $user){
        /** @var AlumnoRepository $alumno */
        $repositoryAlumno = $this->emConvivencia->getRepository('AppBundle:Alumno');
        /** @var Alumno $alumno */
        $alumno = $repositoryAlumno->findOneByidUsuario($user);
        return $alumno->getPuntos();
    }

}