<?php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Client")
 * @UniqueEntity(fields = "username", targetClass = "Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", message="fos_user.email.already_used")
 */

class Client extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}