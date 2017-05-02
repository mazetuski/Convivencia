<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleDiarioSancionHora
 *
 * @ORM\Table(name="detalle_diario_sancion_hora")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DetalleDiarioSancionHoraRepository")
 */
class DetalleDiarioSancionHora
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
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Sanciones")
     * @ORM\JoinColumn(name="idSancion", referencedColumnName="id")
     */
    private $idSancion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time")
     */
    private $hora;


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
     * Set idSancion
     *
     * @param integer $idSancion
     *
     * @return DetalleDiarioSancionHora
     */
    public function setIdSancion($idSancion)
    {
        $this->idSancion = $idSancion;

        return $this;
    }

    /**
     * Get idSancion
     *
     * @return int
     */
    public function getIdSancion()
    {
        return $this->idSancion;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return DetalleDiarioSancionHora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }
}
