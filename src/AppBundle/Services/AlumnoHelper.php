<?php

namespace AppBundle\Services;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Partes;
use AppBundle\Entity\Sanciones;
use AppBundle\Entity\Tutores;
use AppBundle\Model\CarnetData;
use AppBundle\Model\UserData;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\DiarioAulaConvivenciaRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\SancionesRepository;
use AppBundle\Repository\TutoresRepository;
use Doctrine\ORM\EntityManager;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Entity\Usuarios;
use Symfony\Component\HttpFoundation\Request;


class AlumnoHelper
{

    const SELECT_PUNTOS = array(
        'Todos', '0', '1 - 3', '1 - 6', '3 - 7', '7 - 10',
    );

    const ID_TIPO_OTRAS = 4;

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
        /** @var TutoresRepository repositoryTutor */
        $this->repositoryTutor = $this->emConvivencia->getRepository('AppBundle:Tutores');
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
     * Función que devuelve los tipos filtrados por el rol del usuario
     * @param Request $request
     * @return array
     */
    public function getTipoByRol(Usuarios $usuario)
    {
        $repositoryTipo = $this->emConvivencia->getRepository('AppBundle:TipoSancion');
        if(in_array("ROLE_PROFESOR", $usuario->getRoles()) &&
            (!in_array("ROLE_ADMIN", $usuario->getRoles())
                && !in_array("ROLE_CONVIVENCIA", $usuario->getRoles()))){
            return $repositoryTipo->findById(self::ID_TIPO_OTRAS);
        }
        return $repositoryTipo->findAll();
    }

    /**
     * Función que devuelve las sanciones de un alumno
     * @param Alumno $alumno
     * @return mixed
     */
    public function getSancionesByAlumno(Alumno $alumno, $orderDesc = false, $lastYear = false)
    {
        $sanciones = $this->repositorySanciones->getSancionesByAlumnoOrdenado($alumno, $orderDesc);
        if ($lastYear) {
            $arrSanciones = [];
            $fechaActual = new \DateTime();
            foreach ($sanciones as $sancion) {
                $fechaSancion = $sancion->getFecha();
                if ($fechaSancion->format('Y') == $fechaActual->format('Y'))
                    $arrSanciones[] = $sancion;
            }
            $sanciones = $arrSanciones;
        }
        return $sanciones;
    }

    /**
     * Función que devuelve las sanciones de un alumno
     * @param Alumno $alumno
     * @return mixed
     */
    public function getPartesByAlumno(Alumno $alumno, $orderDesc = false, $lastYear = false)
    {
        $partes = $this->repositoryPartes->getPartesByAlumnoOrdenado($alumno, $orderDesc);
        if ($lastYear) {
            $arrPartes = [];
            $fechaActual = new \DateTime();
            foreach ($partes as $parte) {
                $fechaParte = $parte->getFecha();
                if ($fechaParte->format('Y') == $fechaActual->format('Y'))
                    $arrPartes[] = $parte;
            }
            $partes = $arrPartes;
        }
        return $partes;
    }

    /**
     * Función que devuelve un array del modelo CarnetData
     * @param $alumnos
     * @return array
     */
    public function getArrayCarnetsData($alumnos, $carnetData = true)
    {
        $arrCarnetsData = [];
        /** @var Alumno $alumno */
        foreach ($alumnos as $alumno) {
            if($carnetData) {
                $sanciones = $this->getSancionesByAlumno($alumno);
                $arrCarnetsData[] = new CarnetData($alumno, $sanciones);
            }
            else
                $arrCarnetsData[] = $alumno;
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
        $partes = $this->repositoryPartes->findByIdAlumno($alumno);
        $fechaActual = new \DateTime();
        $numPartes = 0;
        foreach ($partes as $parte) {
            $fechaParte = $parte->getFecha();
            if ($fechaParte->format('Y') == $fechaActual->format('Y'))
                $numPartes++;
        }
        return $numPartes;
    }

    /**
     * Función que devuelve el número de sanciones de un alumno
     * @param Alumno $alumno
     * @return int
     */
    public function getNumSanciones(Alumno $alumno)
    {
        $sanciones = $this->repositorySanciones->findByIdAlumno($alumno);
        $fechaActual = new \DateTime();
        $numSanciones = 0;
        foreach ($sanciones as $sancion) {
            $fechaSancion = $sancion->getFecha();
            if ($fechaSancion->format('Y') == $fechaActual->format('Y'))
                $numSanciones++;
        }
        return $numSanciones;
    }

    /**
     * Función que devuelve el número de visitas al aula de convivencia de un alumno
     * @param Alumno $alumno
     * @return int
     */
    public function getNumVisitasConvivencia(Alumno $alumno)
    {
        $numVisitas = 0;
        $sanciones = $this->repositorySanciones->findByIdAlumno($alumno);
        $fechaActual = new \DateTime();
        foreach ($sanciones as $sancion) {
            $fechaSancion = $sancion->getFecha();
            if ($fechaSancion->format('Y') == $fechaActual->format('Y'))
                $numVisitas += count($this->repositoryAulaConvivencia->findByIdSancion($sancion));
        }
        return $numVisitas;
    }

    /**
     * Devuelve el numero de partes de un alumno por meses
     * @param Alumno $alumno
     * @return array
     */
    public function getNumPartesByMeses(Alumno $alumno)
    {
        $numPartes = $this->repositoryPartes->getPartesByAlumnoOrdenado($alumno);
        $arrPartes = [];
        $fechaActual = new \DateTime();
        /** @var Partes $parte */
        foreach ($numPartes as $parte) {
            $fechaParte = $parte->getFecha();
            if ($fechaParte->format('Y') == $fechaActual->format('Y')) {
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
    public function getNumSancionesByMeses(Alumno $alumno)
    {
        $numSanciones = $this->repositorySanciones->getSancionesByAlumnoOrdenado($alumno);
        $arrSanciones = [];
        $fechaActual = new \DateTime();
        /** @var Sanciones $sancion */
        foreach ($numSanciones as $sancion) {
            $fechaSancion = $sancion->getFecha();
            if ($fechaSancion->format('Y') == $fechaActual->format('Y')) {
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

        $mesesN = array(1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
            "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return $mesesN[$mes];
    }

    /**
     * Función que devuelve un nuevo modelo UserData
     * @param Alumno $alumno
     * @return UserData
     */
    public function getUserData(Alumno $alumno, $orderDesc = false)
    {
        return new UserData($alumno, $this->getNumPartes($alumno),
            $this->getNumSanciones($alumno), $this->getNumVisitasConvivencia($alumno),
            $this->getNumPartesByMeses($alumno), $this->getNumSancionesByMeses($alumno),
            $this->getSancionesByAlumno($alumno, $orderDesc, true), $this->getPartesByAlumno($alumno, $orderDesc, true));
    }

    /**
     * Función que devuelve los alumno filtrados por los puntos pasados por parámetro
     * @param $puntos
     * @return null
     */
    function getCarnetByPuntos($puntos, $alumnos)
    {
        if (!is_numeric($puntos)) return null;
        return $this->repositoryAlumno->findByPuntosAndAlumnos($puntos, $alumnos);

    }

    /**
     * Función que filtra por puntos dependiendo de la selección del usuario.
     * @param $valorSeleccionado
     * @return array
     */
    public function filtrarPorPuntos($valorSeleccionado, $alumnos, $carnetData = true)
    {
        $carnetsFiltrados = [];
        if($valorSeleccionado == self::SELECT_PUNTOS[0])
            return $this->getArrayCarnetsData($alumnos, $carnetData);
        foreach (self::SELECT_PUNTOS as $puntosSelect) {
            if ($puntosSelect == $valorSeleccionado) {
                $carnets = [];
                $puntos = explode(' - ', $puntosSelect);
                $puntosIni = intval($puntos[0]);
                count($puntos) > 1 ? $puntosFin = $puntos[1] : $puntosFin = $puntosIni;
                do {
                    $alumnosFiltrados = $this->getCarnetByPuntos($puntosIni++, $alumnos);
                    $carnets[] = $this->getArrayCarnetsData($alumnosFiltrados, $carnetData);
                } while ($puntosIni <= $puntosFin);

                foreach ($carnets as $carnet)
                    foreach ($carnet as $value)
                        $carnetsFiltrados[] = $value;
            }
        }
        return $carnetsFiltrados;
    }

    /**
     * Función que devuelve los alumnos de un tutor
     * @param Tutores $tutor
     * @return mixed
     */
    public function getAlumnosByTutor(Tutores $tutor){
        return $this->repositoryAlumno->getAlumnosByTutor($tutor);
    }

    /**
     * Función que devuelve un tutor a través de un usuario
     * @param Usuarios $user
     * @return mixed
     */
    public function getTutorByUsuario(Usuarios $user){
        if(!in_array("ROLE_TUTOR", $user->getRoles())) return null;
        return $this->repositoryTutor->findOneByIdUsuario($user);
    }

    /**
     * Función que comprueba si un tutor es tutor de un alumno
     * @param Alumno $alumno
     * @param Tutores $tutor
     * @return bool
     */
    public function isTutorAlumno(Alumno $alumno, Tutores $tutor){
        if(!in_array("ROLE_TUTOR", $tutor->getIdUsuario()->getRoles())) return false;

        $alumnosTutores = $this->getAlumnosByTutor($tutor);
        /** @var Alumno $alumnoTutor */
        foreach ($alumnosTutores as $alumnoTutor)
            if($alumnoTutor->getId() == $alumno->getId())
                return true;
        return false;
    }

    /**
     * Función que devuelve los alumnos por curso
     * @param $cursos
     * @return array
     */
    public function getAlumnosByCursos($cursos){
        $alumnos = [];
        foreach ($cursos as $curso){
            $alumnos[] =$this->repositoryAlumno->findByIdCurso($curso);
        }

        $alumnosFiltrados = [];
        foreach ($alumnos as $alumno)
            foreach ($alumno as $value)
                $alumnosFiltrados[] = $value;

        return $alumnosFiltrados;
    }
}