<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamenPUtilisateurs
 *
 * @ORM\Table(name="examen_p_utilisateurs")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\ExamenPUtilisateursRepository")
 */
class ExamenPUtilisateurs
{
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Permisfute\PermisfuteBundle\Entity\ExamenP")
     */
    
    private $examen_p;
       
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     */

    private $utilisateurs;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleP", type="string", length=100)
     */
    private $libelleP;

    /**
     * Set libelleP
     *
     * @param string $libelleP
     * @return ExamenPUtilisateurs
     */
    public function setLibelleP($libelleP)
    {
        $this->libelle = $libelleP;

        return $this;
    }

    /**
     * Get libelleP
     *
     * @return string 
     */
    public function getLibelleP()
    {
        return $this->libelleP;
    }

    /**
     * Set examen_p
     *
     * @param \Permisfute\PermisfuteBundle\Entity\ExamenP $examenP
     * @return ExamenPUtilisateurs
     */
    public function setExamenP(\Permisfute\PermisfuteBundle\Entity\ExamenP $examenP)
    {
        $this->examen_p = $examenP;

        return $this;
    }

    /**
     * Get examen_p
     *
     * @return \Permisfute\PermisfuteBundle\Entity\ExamenP 
     */
    public function getExamenP()
    {
        return $this->examen_p;
    }

    /**
     * Set utilisateurs
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateurs
     * @return ExamenPUtilisateurs
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
