<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSAResponsable
 *
 * @ORM\Table(name="f_s_a_responsable")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FSAResponsableRepository")
 */
class FSAResponsable
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
     * @var int
     *
     * @ORM\Column(name="idActionPlan", type="integer")
     */
    private $idActionPlan;

    /**
     * @var int
     *
     * @ORM\Column(name="idResponsable", type="integer")
     */
    private $idResponsable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdDate", type="datetime")
     */
    private $createdDate;

    /**
     * @var string
     *
     * @ORM\Column(name="migrations", type="string", length=255)
     */
    private $migrations;


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
     * Set idActionPlan
     *
     * @param integer $idActionPlan
     *
     * @return FSAResponsable
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
     * Set idResponsable
     *
     * @param integer $idResponsable
     *
     * @return FSAResponsable
     */
    public function setIdResponsable($idResponsable)
    {
        $this->idResponsable = $idResponsable;

        return $this;
    }

    /**
     * Get idResponsable
     *
     * @return int
     */
    public function getIdResponsable()
    {
        return $this->idResponsable;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return FSAResponsable
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
     * Set migrations
     *
     * @param string $migrations
     *
     * @return FSAResponsable
     */
    public function setMigrations($migrations)
    {
        $this->migrations = $migrations;

        return $this;
    }

    /**
     * Get migrations
     *
     * @return string
     */
    public function getMigrations()
    {
        return $this->migrations;
    }
}

