<?php

namespace AppBundle\Services;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Partes;
use AppBundle\Entity\Sanciones;
use AppBundle\Model\CarnetData;
use AppBundle\Model\UserData;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\DiarioAulaConvivenciaRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\SancionesRepository;
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
        $this->repositoryPartes = $this->emConvivencia->getRepository('AppBundle:Partes');
        /** @var SancionesRepository $repositorySanciones */
        $this->repositorySanciones = $this->emConvivencia->getRepository('AppBundle:Sanciones');
        /** @var DiarioAulaConvivenciaRepository repositoryAulaConvivencia */
        $this->repositoryAulaConvivencia = $this->emConvivencia->getRepository('AppBundle:DiarioAulaConvivencia');
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
            if (count($alumnos) == 0)
                $alumnos = $this->repositoryAlumno->findAll();
        } else
            $alumnos = $this->repositoryAlumno->findAll();
        return $alumnos;
    }

    /**
     * Función que devuelve las sanciones de un alumno
     * @param Alumno $alumno
     * @return mixed
     */
    public function getSancionesByAlumno(Alumno $alumno)
    {
        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $this->emConvivencia->getRepository('AppBundle:Sanciones');
        $sanciones = $repositorySanciones->getSancionesNoFinalizadas($alumno);
        return $sanciones;
    }

    /**
     * Función que devuelve un array del modelo CarnetData
     * @param $alumnos
     * @return array
     */
    public function getArrayCarnetsData($alumnos)
    {
        $arrCarnetsData = [];
        /** @var Alumno $alumno */
        foreach ($alumnos as $alumno) {
            $sanciones = $this->getSancionesByAlumno($alumno);
            $arrCarnetsData[] = new CarnetData($alumno, $sanciones);
        }
        return $arrCarnetsData;
    }

    /**
     * Función que devuelve el número de partes de un alumno
     * @param Alumno $alumno
     * @return int
     */
    public function getNumPartes(Alumno $alumno)
    {
        $numPartes = $this->repositoryPartes->findByIdAlumno($alumno);
        return count($numPartes);
    }

    /**
     * Función que devuelve el número de sanciones de un alumno
     * @param Alumno $alumno
     * @return int
     */
    public function getNumSanciones(Alumno $alumno)
    {
        $numSanciones = $this->repositorySanciones->findByIdAlumno($alumno);
        return count($numSanciones);
    }

    /**
     * Función que devuelve el número de visitas al aula de convivencia de un alumno
     * @param Alumno $alumno
     * @return int
     */
    public function getNumVisitasConvivencia(Alumno $alumno)
    {
        $numVisitas = 0;
        $sanciones = $this->getSancionesByAlumno($alumno);
        foreach ($sanciones as $sancion)
            $numVisitas += count($this->repositoryAulaConvivencia->findByIdSancion($sancion));
        return $numVisitas;
    }

    /**
     * Devuelve el numero de partes de un alumno por meses
     * @param Alumno $alumno
     * @return array
     */
    public function getNumPartesByMeses(Alumno $alumno){
        $numPartes = $this->repositoryPartes->getPartesByAlumnoOrdenado($alumno);
        $arrPartes = [];
        $fechaActual = new \DateTime();
        /** @var Partes $parte */
        foreach ($numPartes as $parte){
            $fechaParte = $parte->getFecha();
            if($fechaParte->format('Y') == $fechaActual->format('Y')) {
                $mes = $this->SpanishMonth($fechaParte);
                if (!isset($arrPartes[$mes]))
                    $arrPartes[$mes] = 1;
                else
                    $arrPartes[$mes] += 1;
            }
        }
        return $arrPartes;
    }

    /**
     * Devuelve el número de sanciones de un alumno por meses
     * @param Alumno $alumno
     * @return array
     */
    public function getNumSancionesByMeses(Alumno $alumno){
        $numSanciones = $this->repositorySanciones->getSancionesByAlumnoOrdenado($alumno);
        $arrSanciones = [];
        $fechaActual = new \DateTime();
        /** @var Sanciones $sancion */
        foreach ($numSanciones as $sancion){
            $fechaSancion = $sancion->getFecha();
            if($fechaSancion->format('Y') == $fechaActual->format('Y')) {
                $mes = $this->SpanishMonth($fechaSancion);
                if (!isset($arrSanciones[$mes]))
                    $arrSanciones[$mes] = 1;
                else
                    $arrSanciones[$mes] += 1;
            }
        }
        return $arrSanciones;
    }

    /**
     * Función que devuelve el mes en español
     * @param $FechaStamp
     * @return mixed
     */
    function SpanishMonth(\DateTime $fecha)
    {
        $mes = $fecha->format('n');

        $mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
            "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        return $mesesN[$mes];
    }

    /**
     * Función que devuelve un nuevo modelo UserData
     * @param Alumno $alumno
     * @return UserData
     */
    public function getUserData(Alumno $alumno)
    {
        return new UserData($alumno, $this->getNumPartes($alumno),
            $this->getNumSanciones($alumno), $this->getNumVisitasConvivencia($alumno),
            $this->getNumPartesByMeses($alumno), $this->getNumSancionesByMeses($alumno));
    }
}