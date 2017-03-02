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
     * @ORM\ManyToOne(targetEntity="Permisfute\PermisfuteBundle\Entity\vehicule", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $vehicule;
    
    
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
     * @ORM\Column(name="date_heure", type="datetime")
     */
    private $dateHeure;

    /**
     * @var string
     *
     * @ORM\Column(name="tarif_heure", type="decimal", precision=10, scale=2)
     */
    private $tarifHeure;


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
     * Set dateHeure
     *
     * @param \DateTime $dateHeure
     * @return Lecon
     */
    public function setDateHeure($dateHeure)
    {
        $this->dateHeure = $dateHeure;

        return $this;
    }

    /**
     * Get dateHeure
     *
     * @return \DateTime 
     */
    public function getDateHeure()
    {
        return $this->dateHeure;
    }

    /**
     * Set tarifHeure
     *
     * @param string $tarifHeure
     * @return Lecon
     */
    public function setTarifHeure($tarifHeure)
    {
        $this->tarifHeure = $tarifHeure;

        return $this;
    }

    /**
     * Get tarifHeure
     *
     * @return string 
     */
    public function getTarifHeure()
    {
        return $this->tarifHeure;
    }
    
    public function setVehicule(Vehicule $vehicule)
    {
        $this->vehicule = $vehicule;
        return $this;
    }
    
     public function getVehicule()
    {
        return $this->vehicule;
    }
}
