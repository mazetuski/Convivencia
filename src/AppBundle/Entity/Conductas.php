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
}

