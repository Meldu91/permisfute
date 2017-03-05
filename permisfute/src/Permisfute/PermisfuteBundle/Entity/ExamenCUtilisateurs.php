<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamenCUtilisateurs
 *
 * @ORM\Table(name="examen_c_utilisateurs")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\ExamenCUtilisateursRepository")
 */
class ExamenCUtilisateurs
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Permisfute\PermisfuteBundle\Entity\ExamenC")
     */
    
    private $examen_c;
       
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     */

    private $utilisateurs;
 
    /**
     * @var string
     *
     * @ORM\Column(name="libelleC", type="string", length=100)
     */
    private $libelleC;

    /**
     * Set libelleC
     *
     * @param string $libelleC
     * @return ExamenCUtilisateurs
     */
    public function setLibelleC($libelleC)
    {
        $this->libelleC = $libelleC;

        return $this;
    }

    /**
     * Get libelleC
     *
     * @return string 
     */
    public function getLibelleC()
    {
        return $this->libelleC;
    }

    /**
     * Set examen_c
     *
     * @param \Permisfute\PermisfuteBundle\Entity\ExamenC $examenC
     * @return ExamenCUtilisateurs
     */
    public function setExamenC(\Permisfute\PermisfuteBundle\Entity\ExamenC $examenC)
    {
        $this->examen_c = $examenC;

        return $this;
    }

    /**
     * Get examen_c
     *
     * @return \Permisfute\PermisfuteBundle\Entity\ExamenC 
     */
    public function getExamenC()
    {
        return $this->examen_c;
    }

    /**
     * Set utilisateurs
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateurs
     * @return ExamenCUtilisateurs
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
