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
     * @ORM\column(type="string", length=50, nullable=true)
     */
    
    private $niveauEtude;
    
    /** 
     *
     * @var type string
     * 
     * @ORM\column(type="string", length=50, nullable=true)
     */
    
    private $nomETablissement;
    
    /** 
     *
     * @var type string
     * 
     * @ORM\column(type="string", length=100, nullable=true)
     */
    
    private $entrepriseSalarie;
    
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    
    ############################## GETTERS AND SETTERS ##########################
    
    
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
     * Set niveauEtude
     *
     * @param string $niveauEtude
     * @return Utilisateurs
     */
    public function setNiveauEtude($niveauEtude)
    {
        $this->niveauEtude = $niveauEtude;

        return $this;
    }

    /**
     * Get niveauEtude
     *
     * @return string 
     */
    public function getNiveauEtude()
    {
        return $this->niveauEtude;
    }

    /**
     * Set nomETablissement
     *
     * @param string $nomETablissement
     * @return Utilisateurs
     */
    public function setNomETablissement($nomETablissement)
    {
        $this->nomETablissement = $nomETablissement;

        return $this;
    }

    /**
     * Get nomETablissement
     *
     * @return string 
     */
    public function getNomETablissement()
    {
        return $this->nomETablissement;
    }

    /**
     * Set entrepriseSalarie
     *
     * @param string $entrepriseSalarie
     * @return Utilisateurs
     */
    public function setEntrepriseSalarie($entrepriseSalarie)
    {
        $this->entrepriseSalarie = $entrepriseSalarie;

        return $this;
    }

    /**
     * Get entrepriseSalarie
     *
     * @return string 
     */
    public function getEntrepriseSalarie()
    {
        return $this->entrepriseSalarie;
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
}