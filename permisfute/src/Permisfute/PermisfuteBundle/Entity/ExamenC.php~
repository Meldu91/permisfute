<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamenC
 *
 * @ORM\Table(name="examen_c")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\ExamenCRepository")
 */
class ExamenC
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
    private $dateInscriptionC;

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
     * @return ExamenC
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
     * @return ExamenC
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
     * Set dateInscriptionC
     *
     * @param \DateTime $dateInscriptionC
     * @return ExamenC
     */
    public function setDateInscriptionC($dateInscriptionC)
    {
        $this->dateInscriptionC = $dateInscriptionC;

        return $this;
    }

    /**
     * Get dateInscriptionC
     *
     * @return \DateTime 
     */
    public function getDateInscriptionC()
    {
        return $this->dateInscriptionC;
    }
}
