<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\ModeleRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"modele" = "Modele", "voiture" = "Voiture", "moto"="Moto"})
 */

class Modele
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
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anciennete", type="date", nullable=true)
     */
    private $anciennete;


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
     * @return Modele
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
     * Set anciennete
     *
     * @param \DateTime $anciennete
     * @return Modele
     */
    public function setAnciennete($anciennete)
    {
        $this->anciennete = $anciennete;

        return $this;
    }

    /**
     * Get anciennete
     *
     * @return \DateTime 
     */
    public function getAnciennete()
    {
        return $this->anciennete;
    }
}
