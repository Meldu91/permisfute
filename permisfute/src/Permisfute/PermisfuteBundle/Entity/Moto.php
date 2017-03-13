<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moto
 *
 * @ORM\Table(name="moto")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\MotoRepository")
 */
class Moto extends Modele
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
     * @var float
     *
     * @ORM\Column(name="consommationM", type="float")
     */
    private $consommationM;

    /**
     * @var string
     *
     * @ORM\Column(name="immatriculationM", type="string", length=7, unique=true)
     */
    private $immatriculationM;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set consommationM
     *
     * @param float $consommationM
     * @return Moto
     */
    public function setConsommationM($consommationM)
    {
        $this->consommationM = $consommationM;

        return $this;
    }

    /**
     * Get consommationM
     *
     * @return float 
     */
    public function getConsommationM()
    {
        return $this->consommationM;
    }

    /**
     * Set immatriculationM
     *
     * @param string $immatriculationM
     * @return Moto
     */
    public function setImmatriculationM($immatriculationM)
    {
        $this->immatriculationM = $immatriculationM;

        return $this;
    }

    /**
     * Get immatriculationM
     *
     * @return string 
     */
    public function getImmatriculationM()
    {
        return $this->immatriculationM;
    }
}
