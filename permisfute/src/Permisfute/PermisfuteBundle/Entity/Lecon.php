<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lecon
 *
 * @ORM\Table(name="lecon")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\LeconRepository")
 */
class Lecon
{
    /**
     * @ORM\ManyToOne(targetEntity="Permisfute\PermisfuteBundle\Entity\Modele", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $modele;  
    
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
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="h_debut", type="time")
     */
    private $hDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="h_fin", type="time")
     */
    private $hFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="temps", type="time")
     */
    private $temps;


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
     * Set titre
     *
     * @param string $titre
     * @return Lecon
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Lecon
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set hDebut
     *
     * @param \DateTime $hDebut
     * @return Lecon
     */
    public function setHDebut($hDebut)
    {
        $this->hDebut = $hDebut;

        return $this;
    }

    /**
     * Get hDebut
     *
     * @return \DateTime 
     */
    public function getHDebut()
    {
        return $this->hDebut;
    }

    /**
     * Set hFin
     *
     * @param \DateTime $hFin
     * @return Lecon
     */
    public function setHFin($hFin)
    {
        $this->hFin = $hFin;

        return $this;
    }

    /**
     * Get hFin
     *
     * @return \DateTime 
     */
    public function getHFin()
    {
        return $this->hFin;
    }

    /**
     * Set temps
     *
     * @param \DateTime $temps
     * @return Lecon
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return \DateTime 
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set modele
     *
     * @param \Permisfute\PermisfuteBundle\Entity\Modele $modele
     * @return Lecon
     */
    public function setModele(\Permisfute\PermisfuteBundle\Entity\Modele $modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return \Permisfute\PermisfuteBundle\Entity\Modele 
     */
    public function getModele()
    {
        return $this->modele;
    }
}
