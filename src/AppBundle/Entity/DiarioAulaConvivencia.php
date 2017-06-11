<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiarioAulaConvivencia
 *
 * @ORM\Table(name="diario_aula_convivencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DiarioAulaConvivenciaRepository")
 */
class DiarioAulaConvivencia
{
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
     * @var int
     *
     * @ORM\Column(name="hora", type="integer")
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="actitud", type="string", length=255, columnDefinition="enum('A', 'B', 'C')", nullable=true)
     */
    private $actitud;


    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Profesores")
     * @ORM\JoinColumn(name="idProfesor", referencedColumnName="id", onDelete="cascade")
     */
    private $idProfesor;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Sanciones")
     * @ORM\JoinColumn(name="idSancion", referencedColumnName="id", onDelete="cascade")
     */
    private $idSancion;

    /**
     * @var int
     *
     * @ORM\Column(name="asiste", type="integer")
     */
    private $asiste;

    /**
     * @var int
     * @ORM\Column(name="recupera", type="integer")
     */
    private $recupera;


    function __construct()
    {
        $this->asiste = 0;
        $this->recupera = 0;
    }

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
     * @return DiarioAulaConvivencia
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
     * Set hora
     *
     * @param integer $hora
     *
     * @return DiarioAulaConvivencia
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return int
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return DiarioAulaConvivencia
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
     * Set actitud
     *
     * @param string $actitud
     *
     * @return DiarioAulaConvivencia
     */
    public function setActitud($actitud)
    {
        $this->actitud = $actitud;

        return $this;
    }

    /**
     * Get actitud
     *
     * @return string
     */
    public function getActitud()
    {
        return $this->actitud;
    }

    /**
     * Set idProfesor
     *
     * @param integer $idProfesor
     *
     * @return DiarioAulaConvivencia
     */
    public function setIdProfesor($idProfesor)
    {
        $this->idProfesor = $idProfesor;

        return $this;
    }

    /**
     * Get idProfesor
     *
     * @return int
     */
    public function getIdProfesor()
    {
        return $this->idProfesor;
    }

    /**
     * Set idSancion
     *
     * @param \AppBundle\Entity\Sanciones $idSancion
     *
     * @return DiarioAulaConvivencia
     */
    public function setIdSancion(\AppBundle\Entity\Sanciones $idSancion = null)
    {
        $this->idSancion = $idSancion;

        return $this;
    }

    /**
     * Get idSancion
     *
     * @return \AppBundle\Entity\Sanciones
     */
    public function getIdSancion()
    {
        return $this->idSancion;
    }

    /**
     * Set asiste
     *
     * @param integer $asiste
     *
     * @return DiarioAulaConvivencia
     */
    public function setAsiste($asiste)
    {
        $this->asiste = $asiste;

        return $this;
    }

    /**
     * Get asiste
     *
     * @return integer
     */
    public function getAsiste()
    {
        return $this->asiste;
    }

    /**
     * Set recupera
     *
     * @param integer $recupera
     *
     * @return DiarioAulaConvivencia
     */
    public function setRecupera($recupera)
    {
        $this->recupera = $recupera;

        return $this;
    }

    /**
     * Get recupera
     *
     * @return integer
     */
    public function getRecupera()
    {
        return $this->recupera;
    }
}
