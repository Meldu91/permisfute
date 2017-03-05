<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeconUtilisateurs
 *
 * @ORM\Table(name="lecon_utilisateurs")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\LeconUtilisateursRepository")
 */
class LeconUtilisateurs
{
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Permisfute\PermisfuteBundle\Entity\Lecon")
     */
    
    private $lecon;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     */
    
    private $utilisateurs;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * Set nom
     *
     * @param string $nom
     * @return LeconUtilisateurs
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
     * Set lecon
     *
     * @param \Permisfute\PermisfuteBundle\Entity\Lecon $lecon
     * @return LeconUtilisateurs
     */
    public function setLecon(\Permisfute\PermisfuteBundle\Entity\Lecon $lecon)
    {
        $this->lecon = $lecon;

        return $this;
    }

    /**
     * Get lecon
     *
     * @return \Permisfute\PermisfuteBundle\Entity\Lecon 
     */
    public function getLecon()
    {
        return $this->lecon;
    }

    /**
     * Set utilisateurs
     *
     * @param \Permisfute\PermisfuteBundle\Entity\Utilisateurs $utilisateurs
     * @return LeconUtilisateurs
     */
    public function setUtilisateurs(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateurs)
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }

    /**
     * Get utilisateurs
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }
}
