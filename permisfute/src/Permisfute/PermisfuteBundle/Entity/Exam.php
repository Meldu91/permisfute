<?php

namespace Permisfute\PermisfuteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exam
 *
 * @ORM\Table(name="exam")
 * @ORM\Entity(repositoryClass="Permisfute\PermisfuteBundle\Repository\ExamRepository")
 */
class Exam
{
    /**
     * @ORM\ManyToOne(targetEntity="Permisfute\PermisfuteBundle\Entity\type_exam", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $type_exam;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * Set type_exam
     *
     * @param \Permisfute\PermisfuteBundle\Entity\type_exam $typeExam
     * @return Exam
     */
    public function setTypeExam(\Permisfute\PermisfuteBundle\Entity\type_exam $typeExam)
    {
        $this->type_exam = $typeExam;

        return $this;
    }

    /**
     * Get type_exam
     *
     * @return \Permisfute\PermisfuteBundle\Entity\type_exam 
     */
    public function getTypeExam()
    {
        return $this->type_exam;
    }
}
