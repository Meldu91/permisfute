<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamenP
 *
 * @ORM\Table(name="examen_p")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\ExamenPRepository")
 */
class ExamenP
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
     * @ORM\Column(name="date_inscription", type="date")
     */
    private $dateInscriptionP;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_passage", type="integer")
     */
    private $nbPassage;

    /**
     * @var string
     *
     * @ORM\Column(name="resultat", type="string", length=3)
     */
    private $resultat;


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
     * Set nbPassage
     *
     * @param integer $nbPassage
     * @return ExamenP
     */
    public function setNbPassage($nbPassage)
    {
        $this->nbPassage = $nbPassage;

        return $this;
    }

    /**
     * Get nbPassage
     *
     * @return integer 
     */
    public function getNbPassage()
    {
        return $this->nbPassage;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     * @return ExamenP
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string 
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set dateInscriptionP
     *
     * @param \DateTime $dateInscriptionP
     * @return ExamenP
     */
    public function setDateInscriptionP($dateInscriptionP)
    {
        $this->dateInscriptionP = $dateInscriptionP;

        return $this;
    }

    /**
     * Get dateInscriptionP
     *
     * @return \DateTime 
     */
    public function getDateInscriptionP()
    {
        return $this->dateInscriptionP;
    }
}
