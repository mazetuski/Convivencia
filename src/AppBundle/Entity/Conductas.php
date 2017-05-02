<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conductas
 *
 * @ORM\Table(name="conductas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConductasRepository")
 */
class Conductas
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
     * @var string
     *
     * @ORM\Column(name="conducta", type="string", length=255)
     */
    private $conducta;

    /**
     * @var int
     *
     * @ORM\Column(name="puntos", type="integer")
     */
    private $puntos;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

//    /**
//     * @ORM\OneToMany(targetEntity="rPartesConductas", mappedBy="idConducta")
//     */
//    private $parteConducta;

    /**
     * @ORM\ManyToMany(targetEntity="Partes", mappedBy="idConducta")
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
     * Set conducta
     *
     * @param string $conducta
     *
     * @return Conductas
     */
    public function setConducta($conducta)
    {
        $this->conducta = $conducta;

        return $this;
    }

    /**
     * Get conducta
     *
     * @return string
     */
    public function getConducta()
    {
        return $this->conducta;
    }

    /**
     * @return string Una cadena que contiene los puntos y el nombre de la conducta.
     */
    public function getNombreAndPuntos(){
        return '('.$this->getPuntos() . ') - ' . $this->getConducta();
    }

    /**
     * Set puntos
     *
     * @param integer $puntos
     *
     * @return Conductas
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Conductas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
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
//        return $this;
//    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idParte = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idParte
     *
     * @param \AppBundle\Entity\Partes $idParte
     *
     * @return Conductas
     */
    public function addIdParte(\AppBundle\Entity\Partes $idParte)
    {
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
     * Get idParte
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdParte()
    {
        return $this->idParte;
    }
}
