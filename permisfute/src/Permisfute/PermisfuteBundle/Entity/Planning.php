<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="planning")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\PlanningRepository")
 */
class Planning
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
     * @ORM\Column(name="date_heure_debut", type="datetime")
     */
    private $dateHeureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_heure_fin", type="datetime")
     */
    private $dateHeureFin;


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
     * Set dateHeureDebut
     *
     * @param \DateTime $dateHeureDebut
     * @return Planning
     */
    public function setDateHeureDebut($dateHeureDebut)
    {
        $this->dateHeureDebut = $dateHeureDebut;

        return $this;
    }

    /**
     * Get dateHeureDebut
     *
     * @return \DateTime 
     */
    public function getDateHeureDebut()
    {
        return $this->dateHeureDebut;
    }

    /**
     * Set dateHeureFin
     *
     * @param \DateTime $dateHeureFin
     * @return Planning
     */
    public function setDateHeureFin($dateHeureFin)
    {
        $this->dateHeureFin = $dateHeureFin;

        return $this;
    }

    /**
     * Get dateHeureFin
     *
     * @return \DateTime 
     */
    public function getDateHeureFin()
    {
        return $this->dateHeureFin;
    }
}
