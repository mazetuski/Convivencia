<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Partes
 *
 * @ORM\Table(name="partes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartesRepository")
 */
class Partes
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
     * @ORM\Column(name="descripcion", type="string", length=1000)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="tareas", type="string", length=600)
     */
    private $tareas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaSalidaAula", type="time")
     */
    private $horaSalidaAula;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaLlegadaJefatura", type="time")
     */
    private $horaLlegadaJefatura;

    /**
     * @var string
     *
     * @ORM\Column(name="formato", type="string", length=255, columnDefinition="enum('Papel', 'Digital')")
     */
    private $formato;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * @var int
     *
     * @Assert\Range(
     *      min = 0,
     *      max = 12,
     *      minMessage = "Tiene que ser un mínimo de {{ limit }} puntos",
     *      maxMessage = "Como máximo pueden ser {{ limit }} puntos"
     * )
     *
     * @ORM\Column(name="puntos", type="integer")
     */
    private $puntos = 0;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="EstadosParte")
     * @ORM\JoinColumn(name="idEstado", referencedColumnName="id")
     */
    private $idEstado;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="TipoParte")
     * @ORM\JoinColumn(name="idTipo", referencedColumnName="id")
     */
    private $idTipo;

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
     * @ORM\ManyToMany(targetEntity="Conductas", inversedBy="idParte")
     * @ORM\JoinTable(name="partes_conductas")
     */
    private $idConducta;


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
     * @return Partes
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
     * @return Partes
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
     * Set tareas
     *
     * @param string $tareas
     *
     * @return Partes
     */
    public function setTareas($tareas)
    {
        $this->tareas = $tareas;

        return $this;
    }

    /**
     * Get tareas
     *
     * @return string
     */
    public function getTareas()
    {
        return $this->tareas;
    }

    /**
     * Set horaSalidaAula
     *
     * @param \DateTime $horaSalidaAula
     *
     * @return Partes
     */
    public function setHoraSalidaAula($horaSalidaAula)
    {
        $this->horaSalidaAula = $horaSalidaAula;

        return $this;
    }

    /**
     * Get horaSalidaAula
     *
     * @return \DateTime
     */
    public function getHoraSalidaAula()
    {
        return $this->horaSalidaAula;
    }

    /**
     * Set horaLlegadaJefatura
     *
     * @param \DateTime $horaLlegadaJefatura
     *
     * @return Partes
     */
    public function setHoraLlegadaJefatura($horaLlegadaJefatura)
    {
        $this->horaLlegadaJefatura = $horaLlegadaJefatura;

        return $this;
    }

    /**
     * Get horaLlegadaJefatura
     *
     * @return \DateTime
     */
    public function getHoraLlegadaJefatura()
    {
        return $this->horaLlegadaJefatura;
    }

    /**
     * Set formato
     *
     * @param string $formato
     *
     * @return Partes
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Get formato
     *
     * @return string
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Partes
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set puntos
     *
     * @param integer $puntos
     *
     * @return Partes
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
        return $this;
    }

    /**
     * @return string
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * @param string $idTipo
     */
    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;
    }

    /**
     * Set idAlumno
     *
     * @param integer $idAlumno
     *
     * @return Partes
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
     * @return Partes
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

//    /**
//     * @return mixed
//     */
//    public function getParteConducta()
//    {
//        return $this->parteConducta;
//    }
//
//    /**
//     * @param mixed $parteConducta
//     */
//    public function setParteConducta($parteConducta)
//    {
//        $this->parteConducta = $parteConducta;
//
//        return $this;
//    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fecha = new \DateTime();
        $this->horaSalidaAula = new \DateTime();
        $this->horaLlegadaJefatura = new \DateTime();
        $this->idConducta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idConductum
     *
     * @param \AppBundle\Entity\Conductas $idConductum
     *
     * @return Partes
     */
    public function addIdConductum(\AppBundle\Entity\Conductas $idConductum)
    {
        $this->idConducta[] = $idConductum;

        return $this;
    }

    /**
     * Remove idConductum
     *
     * @param \AppBundle\Entity\Conductas $idConductum
     */
    public function removeIdConductum(\AppBundle\Entity\Conductas $idConductum)
    {
        $this->idConducta->removeElement($idConductum);
    }

    /**
     * Get idConducta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdConducta()
    {
        return $this->idConducta;
    }
}
