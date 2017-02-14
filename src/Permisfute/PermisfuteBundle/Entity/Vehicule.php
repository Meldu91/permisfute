<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\VehiculeRepository")
 */
class Vehicule
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
     * @ORM\Column(name="immatriculation", type="string", length=255)
     */
    private $immatriculation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_achat", type="date")
     */
    private $dateAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="nbkm", type="decimal", precision=10, scale=2)
     */
    private $nbkm;


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
     * Set immatriculation
     *
     * @param string $immatriculation
     * @return Vehicule
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get immatriculation
     *
     * @return string 
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     * @return Vehicule
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime 
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set nbkm
     *
     * @param string $nbkm
     * @return Vehicule
     */
    public function setNbkm($nbkm)
    {
        $this->nbkm = $nbkm;

        return $this;
    }

    /**
     * Get nbkm
     *
     * @return string 
     */
    public function getNbkm()
    {
        return $this->nbkm;
    }
}
