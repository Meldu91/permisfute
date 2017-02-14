<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\EtudiantRepository")
 */
class Etudiant
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
     * @ORM\Column(name="niveauetude", type="string", length=100, nullable=true)
     */
    private $niveauetude;

    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="decimal", precision=5, scale=5, nullable=true)
     */
    private $reduction;


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
     * Set niveauetude
     *
     * @param string $niveauetude
     * @return Etudiant
     */
    public function setNiveauetude($niveauetude)
    {
        $this->niveauetude = $niveauetude;

        return $this;
    }

    /**
     * Get niveauetude
     *
     * @return string 
     */
    public function getNiveauetude()
    {
        return $this->niveauetude;
    }

    /**
     * Set reduction
     *
     * @param string $reduction
     * @return Etudiant
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return string 
     */
    public function getReduction()
    {
        return $this->reduction;
    }
}
