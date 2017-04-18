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
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="actitud", type="string", length=255, columnDefinition="enum('A', 'B', 'C')")
     */
    private $actitud;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumn(name="idAlumno", referencedColumnName="id")
     */
    private $idAlumno;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Profesores")
     * @ORM\JoinColumn(name="idProfesor", referencedColumnName="id")
     */
    private $idProfesor;


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
     * Set idAlumno
     *
     * @param integer $idAlumno
     *
     * @return DiarioAulaConvivencia
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
}

