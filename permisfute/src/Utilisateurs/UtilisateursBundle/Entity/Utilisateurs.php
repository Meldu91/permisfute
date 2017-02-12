<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"Client" = "Client", "Moniteur" = "Moniteur"})
 *
 */

abstract class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     *
     * @Assert\NotBlank(message="Veuillez saisir votre nom", groups={"Registration", "Profile"})
     * @Assert\Length
     * (
     *     min=3,
     *     max=100,
     *     minMessage="Le nom entré est trop petit",
     *     maxMessage="Le nom entré est trop long",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nom;
    
}