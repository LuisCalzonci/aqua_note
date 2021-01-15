<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSACommentAction
 *
 * @ORM\Table(name="f_s_a_comment_action")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FSACommentActionRepository")
 */
class FSACommentAction
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
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer")
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdDate", type="datetime")
     */
    private $createdDate;

    /**
     * @var int
     *
     * @ORM\Column(name="idActionPlan", type="integer")
     */
    private $idActionPlan;

    /**
     * @var string
     *
     * @ORM\Column(name="migration", type="string", length=255)
     */
    private $migration;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return FSACommentAction
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return FSACommentAction
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return FSACommentAction
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set idActionPlan
     *
     * @param integer $idActionPlan
     *
     * @return FSACommentAction
     */
    public function setIdActionPlan($idActionPlan)
    {
        $this->idActionPlan = $idActionPlan;

        return $this;
    }

    /**
     * Get idActionPlan
     *
     * @return int
     */
    public function getIdActionPlan()
    {
        return $this->idActionPlan;
    }

    /**
     * Set migration
     *
     * @param string $migration
     *
     * @return FSACommentAction
     */
    public function setMigration($migration)
    {
        $this->migration = $migration;

        return $this;
    }

    /**
     * Get migration
     *
     * @return string
     */
    public function getMigration()
    {
        return $this->migration;
    }
}

