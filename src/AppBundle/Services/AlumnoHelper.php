<?php

namespace AppBundle\Services;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Partes;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\PartesRepository;
use Doctrine\ORM\EntityManager;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Entity\Usuarios;
use Symfony\Component\HttpFoundation\Request;

class AlumnoHelper
{

    function __construct(EntityManager $emConvivencia)
    {
        $this->emConvivencia = $emConvivencia;
        /** @var AlumnoRepository $repositoryAlumnos */
        $this->repositoryAlumno = $this->emConvivencia->getRepository('AppBundle:Alumno');
        /** @var CursosRepository $repositoryACursos */
        $this->repositoryACursos = $this->emConvivencia->getRepository('AppBundle:Cursos');
        /** @var PartesRepository $repositoryPartes */
        $this->repositoryPartes =  $this->emConvivencia->getRepository('AppBundle:Partes');
    }

    /**
     * Función que devuelve el alumno logueado.
     *
     * @param Usuarios $user
     * @return Alumno|AlumnoRepository
     */
    public function getAlumnoLogueado(Usuarios $user)
    {
        /** @var Alumno $alumno */
        $alumno = $this->repositoryAlumno->findOneByidUsuario($user);
        return $alumno;
    }

    /**
     * Función que devuelve si un alumno existe
     * @param Usuarios $user
     * @return bool
     */
    public function alumnoExists(Usuarios $user)
    {
        /** @var Alumno $alumno */
        $alumno = $this->repositoryAlumno->findOneByidUsuario($user);
        if ($alumno == null)
            return false;
        return true;

    }

    /**
     * Función que devuelve los puntos del alumno logeado
     * @param Usuarios $user
     * @return int
     */
    public function getPuntosAlumnoLogin(Usuarios $user)
    {
        /** @var Alumno $alumno */
        $alumno = $this->repositoryAlumno->findOneByidUsuario($user);
        return $alumno->getPuntos();
    }

    /**
     * Función que devuelve los alumnos filtrados por la request
     * @param Request $request
     * @return array
     */
    public function getAlumnosByRequest(Request $request)
    {
        if ($request->request->has('busqueda') && $request->get('cursos') != null) {
            $alumnos = array();
            foreach ($request->get('cursos') as $curso) {
                $cursosByCurso = $this->repositoryACursos->getCursosByCurso($curso);
                foreach ($cursosByCurso as $cursoByCurso) {
                    $alumnosByCurso = $this->repositoryAlumno->getAlumnosByCurso($cursoByCurso);
                    foreach ($alumnosByCurso as $alumno)
                        $alumnos[] = $alumno;
                }
            }
        } else
            $alumnos = $this->repositoryAlumno->findAll();
        return $alumnos;
    }
}