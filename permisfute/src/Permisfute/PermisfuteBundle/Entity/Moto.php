<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moto
 *
 * @ORM\Table(name="moto")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\MotoRepository")
 */
class Moto
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
     * @ORM\Column(name="puissance", type="string", length=200, nullable=true)
     */
    private $puissance;


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
     * Set puissance
     *
     * @param string $puissance
     * @return Moto
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return string 
     */
    public function getPuissance()
    {
        return $this->puissance;
    }
}
