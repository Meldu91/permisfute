<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\VoitureRepository")
 */
class Voiture
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
     * @ORM\Column(name="immatriculation", type="string", length=7, unique=true)
     */
    private $immatriculation;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=100, nullable=true)
     */
    private $modele;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_achat", type="date")
     */
    private $dateAchat;

    /**
     * @var float
     *
     * @ORM\Column(name="nombreKM", type="float", nullable=true)
     */
    private $nombreKM;

    /**
     * @var string
     *
     * @ORM\Column(name="consommation", type="decimal", precision=2, scale=2)
     */
    private $consommation;


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
     * @return Voiture
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
     * Set modele
     *
     * @param string $modele
     * @return Voiture
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     * @return Voiture
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
     * Set nombreKM
     *
     * @param float $nombreKM
     * @return Voiture
     */
    public function setNombreKM($nombreKM)
    {
        $this->nombreKM = $nombreKM;

        return $this;
    }

    /**
     * Get nombreKM
     *
     * @return float 
     */
    public function getNombreKM()
    {
        return $this->nombreKM;
    }

    /**
     * Set consommation
     *
     * @param string $consommation
     * @return Voiture
     */
    public function setConsommation($consommation)
    {
        $this->consommation = $consommation;

        return $this;
    }

    /**
     * Get consommation
     *
     * @return string 
     */
    public function getConsommation()
    {
        return $this->consommation;
    }
}
