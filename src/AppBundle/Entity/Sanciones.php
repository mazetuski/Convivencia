<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sanciones
 *
 * @ORM\Table(name="sanciones")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SancionesRepository")
 */
class Sanciones
{

    function __construct()
    {
        $this->fecha = new \DateTime();
        $this->fechaFinal = new \DateTime();
        $this->fechaInicio = new \DateTime();
        $this->fechaComunicacion = null;
        $this->fechaConfirmacion = null;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFinal", type="datetime")
     */
    private $fechaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="sancion", type="string", length=255)
     */
    private $sancion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="evaluacion", type="string", length=255, nullable=true)
     */
    private $evaluacion;

    /**
     * @var int
     *
     * @ORM\Column(name="puntosRecuperados", type="integer", nullable=true)
     */
    private $puntosRecuperados = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaConfirmacion", type="string", nullable=true)
     */
    private $fechaConfirmacion;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaComunicacion", type="string", nullable=true)
     */
    private $fechaComunicacion;

    /**
     * @var int
     *
         * @ORM\ManyToOne(targetEntity="TipoSancion")
         * @ORM\JoinColumn(name="idTipo", referencedColumnName="id")
     */
    private $idTipo;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="EstadosSancion")
     * @ORM\JoinColumn(name="idEstado", referencedColumnName="id")
     */
    private $idEstado;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumn(name="idAlumno", referencedColumnName="id", onDelete="cascade")
     */
    private $idAlumno;

    /**
     * @var int
     *
     * @ORM\ManyToMany(targetEntity="Partes", inversedBy="sancion", cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="idParte", referencedColumnName="id", onDelete="cascade")
     */
    private $idParte;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Sanciones
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Sanciones
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     *
     * @return Sanciones
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Set sancion
     *
     * @param string $sancion
     *
     * @return Sanciones
     */
    public function setSancion($sancion)
    {
        $this->sancion = $sancion;

        return $this;
    }

    /**
     * Get sancion
     *
     * @return string
     */
    public function getSancion()
    {
        return $this->sancion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Sanciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set evaluacion
     *
     * @param string $evaluacion
     *
     * @return Sanciones
     */
    public function setEvaluacion($evaluacion)
    {
        $this->evaluacion = $evaluacion;

        return $this;
    }

    /**
     * Get evaluacion
     *
     * @return string
     */
    public function getEvaluacion()
    {
        return $this->evaluacion;
    }

    /**
     * Set puntosRecuperados
     *
     * @param integer $puntosRecuperados
     *
     * @return Sanciones
     */
    public function setPuntosRecuperados($puntosRecuperados)
    {
        $this->puntosRecuperados = $puntosRecuperados;

        return $this;
    }

    /**
     * Get puntosRecuperados
     *
     * @return int
     */
    public function getPuntosRecuperados()
    {
        return $this->puntosRecuperados;
    }

    /**
     * @return int
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * @param int $idTipo
     */
    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;
    }

    /**
     * @return int
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * @param int $idEstado
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    }

    /**
     * Set idAlumno
     *
     * @param integer $idAlumno
     *
     * @return Sanciones
     */
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }

    /**
     * Get idAlumno
     *
     * @return int
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * @return int
     */
    public function getIdParte()
    {
        return $this->idParte;
    }

    /**
     * @param int $idParte
     */
    public function setIdParte($idParte)
    {
        $this->idParte = $idParte;
        return $this;
    }

    /**
     * Add idParte
     *
     * @param \AppBundle\Entity\Partes $idParte
     *
     * @return Sanciones
     */
    public function addIdParte(\AppBundle\Entity\Partes $idParte)
    {
        $idParte->addSancion($this);
        $this->idParte[] = $idParte;

        return $this;
    }

    /**
     * Remove idParte
     *
     * @param \AppBundle\Entity\Partes $idParte
     */
    public function removeIdParte(\AppBundle\Entity\Partes $idParte)
    {
        $this->idParte->removeElement($idParte);
    }

    /**
     * Set fechaConfirmacion
     *
     * @param string $fechaConfirmacion
     *
     * @return Sanciones
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Get fechaConfirmacion
     *
     * @return string
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Set fechaComunicacion
     *
     * @param string $fechaComunicacion
     *
     * @return Sanciones
     */
    public function setFechaComunicacion($fechaComunicacion)
    {
        $this->fechaComunicacion = $fechaComunicacion;

        return $this;
    }

    /**
     * Get fechaComunicacion
     *
     * @return string
     */
    public function getFechaComunicacion()
    {
        return $this->fechaComunicacion;
    }
}
