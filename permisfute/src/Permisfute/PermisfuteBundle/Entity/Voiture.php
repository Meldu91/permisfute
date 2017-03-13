<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\VoitureRepository")
 */
class Voiture extends Modele
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
     * @ORM\Column(name="consommationV", type="float")
     */
    private $consommationV;

    /**
     * @var string
     *
     * @ORM\Column(name="immatriculationV", type="string", length=7, unique=true)
     */
    private $immatriculationV;


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
     * Set consommationV
     *
     * @param float $consommationV
     * @return Voiture
     */
    public function setConsommationV($consommationV)
    {
        $this->consommationV = $consommationV;

        return $this;
    }

    /**
     * Get consommationV
     *
     * @return float 
     */
    public function getConsommationV()
    {
        return $this->consommationV;
    }

    /**
     * Set immatriculationV
     *
     * @param string $immatriculationV
     * @return Voiture
     */
    public function setImmatriculationV($immatriculationV)
    {
        $this->immatriculationV = $immatriculationV;

        return $this;
    }

    /**
     * Get immatriculationV
     *
     * @return string 
     */
    public function getImmatriculationV()
    {
        return $this->immatriculationV;
    }
}
