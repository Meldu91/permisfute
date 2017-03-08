<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    
    protected $groups;
    
    /**
     *
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    
    private $nom;
    
     /**
     *
     * @var string
     * @ORM\Column(type="string", length=50)
     */
   
    private $prenom;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     */
    
    private $dateNaissance;
    
    /**
     * @var int
     *
     * @ORM\Column(type="integer", length=10)
     */
    
    private $telephone;
    
     /** 
     *
     * @var type string
     * 
     * @ORM\column(type="string", length=100)
     */
    
    private $adresse;
       
   /** 
     *
     * @var type string
     * 
     * @ORM\column(type="string", length=100, nullable=true)
     */
    
    private $nomFormation;
    
    /** 
     *
     * @var float
     * 
     * @ORM\column(type="float", nullable=true)
     */
    
    private $tauxReduction;
    
    /** 
     *
     * @var type string
     * 
     * @ORM\column(type="string", length=100, nullable=true)
     */
    
    private $nomEtablissement;
    
    /** 
     *
     * @var type string
     * 
     * @ORM\column(type="string", length=100, nullable=true)
     */
    
    private $nomEntreprise;

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateurs
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
     * @return Utilisateurs
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Utilisateurs
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Utilisateurs
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Utilisateurs
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set nomFormation
     *
     * @param string $nomFormation
     * @return Utilisateurs
     */
    public function setNomFormation($nomFormation)
    {
        $this->nomFormation = $nomFormation;

        return $this;
    }

    /**
     * Get nomFormation
     *
     * @return string 
     */
    public function getNomFormation()
    {
        return $this->nomFormation;
    }

    /**
     * Set tauxReduction
     *
     * @param float $tauxReduction
     * @return Utilisateurs
     */
    public function setTauxReduction($tauxReduction)
    {
        $this->tauxReduction = $tauxReduction;

        return $this;
    }

    /**
     * Get tauxReduction
     *
     * @return float 
     */
    public function getTauxReduction()
    {
        return $this->tauxReduction;
    }

    /**
     * Set nomEtablissement
     *
     * @param string $nomEtablissement
     * @return Utilisateurs
     */
    public function setNomEtablissement($nomEtablissement)
    {
        $this->nomEtablissement = $nomEtablissement;

        return $this;
    }

    /**
     * Get nomEtablissement
     *
     * @return string 
     */
    public function getNomEtablissement()
    {
        return $this->nomEtablissement;
    }

    /**
     * Set nomEntreprise
     *
     * @param string $nomEntreprise
     * @return Utilisateurs
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise
     *
     * @return string 
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }
}
