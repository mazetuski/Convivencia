<?php

namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Entity\Usuarios;

class AlumnoHelper
{

    function __construct(EntityManager $emConvivencia)
    {
        $this->emConvivencia = $emConvivencia;
    }

    public function alumnoExists(Usuarios $user){
        /** @var AlumnoRepository $alumno */
        $alumno = $this->emConvivencia->getRepository('AppBundle:Alumno')
        ->findOneByidUsuario($user);

        if($alumno==null)
            return false;
        return true;

    }

}