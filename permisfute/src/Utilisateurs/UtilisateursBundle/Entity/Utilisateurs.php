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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="dateNaissance", type="date", length=100)
     */
    private $dateNaissance;
    
    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=50)
     */
    private $user;
    
    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=50)
     */
    private $mdp;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;
    
}