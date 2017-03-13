<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_Permis
 *
 * @ORM\Table(name="type__permis")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\Type_PermisRepository")
 */
class Type_Permis
{
    /**
     * @ORM\ManyToOne(targetEntity="Permisfute\PermisfuteBundle\Entity\ExamenP", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $examen_p;
    
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
     * @ORM\Column(name="libelle", type="string", length=100)
     */
    private $libelle;


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
     * Set libelle
     *
     * @param string $libelle
     * @return Type_Permis
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set examen_p
     *
     * @param \Permisfute\PermisfuteBundle\Entity\ExamenP $examenP
     * @return Type_Permis
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
}
