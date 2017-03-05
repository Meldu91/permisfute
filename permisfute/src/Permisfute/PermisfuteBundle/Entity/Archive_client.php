<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archive_client
 *
 * @ORM\Table(name="archive_client")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\Archive_clientRepository")
 */
class Archive_client
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateObtentionP", type="date")
     */
    private $dateObtentionP;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateObtentionC", type="date")
     */
    private $dateObtentionC;

    /**
     * @var int
     *
     * @ORM\Column(name="nbTentativesP", type="integer")
     */
    private $nbTentativesP;


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
     * Set nom
     *
     * @param string $nom
     * @return Archive_client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Archive_client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateObtentionP
     *
     * @param \DateTime $dateObtentionP
     * @return Archive_client
     */
    public function setDateObtentionP($dateObtentionP)
    {
        $this->dateObtentionP = $dateObtentionP;

        return $this;
    }

    /**
     * Get dateObtentionP
     *
     * @return \DateTime 
     */
    public function getDateObtentionP()
    {
        return $this->dateObtentionP;
    }

    /**
     * Set dateObtentionC
     *
     * @param \DateTime $dateObtentionC
     * @return Archive_client
     */
    public function setDateObtentionC($dateObtentionC)
    {
        $this->dateObtentionC = $dateObtentionC;

        return $this;
    }

    /**
     * Get dateObtentionC
     *
     * @return \DateTime 
     */
    public function getDateObtentionC()
    {
        return $this->dateObtentionC;
    }

    /**
     * Set nbTentativesP
     *
     * @param integer $nbTentativesP
     * @return Archive_client
     */
    public function setNbTentativesP($nbTentativesP)
    {
        $this->nbTentativesP = $nbTentativesP;

        return $this;
    }

    /**
     * Get nbTentativesP
     *
     * @return integer 
     */
    public function getNbTentativesP()
    {
        return $this->nbTentativesP;
    }
}
