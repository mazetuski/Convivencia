<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecuperaPuntos
 *
 * @ORM\Table(name="recupera_puntos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecuperaPuntosRepository")
 */
class RecuperaPuntos
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="puntos", type="integer")
     */
    private $puntos;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Partes")
     * @ORM\JoinColumn(name="idParte", referencedColumnName="id")
     */
    private $idParte;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumn(name="idAlumno", referencedColumnName="id")
     */
    private $idAlumno;


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
     * @return RecuperaPuntos
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return RecuperaPuntos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return RecuperaPuntos
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
     * Set puntos
     *
     * @param integer $puntos
     *
     * @return RecuperaPuntos
     */
    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }

    /**
     * Get puntos
     *
     * @return int
     */
    public function getPuntos()
    {
        return $this->puntos;
    }

    /**
     * Set idParte
     *
     * @param integer $idParte
     *
     * @return RecuperaPuntos
     */
    public function setIdParte($idParte)
    {
        $this->idParte = $idParte;

        return $this;
    }

    /**
     * Get idParte
     *
     * @return int
     */
    public function getIdParte()
    {
        return $this->idParte;
    }

    /**
     * @return int
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * @param int $idAlumno
     */
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }


}
