<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSAPlanAction
 *
 * @ORM\Table(name="f_s_a_plan_action")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FSAPlanActionRepository")
 */
class FSAPlanAction
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
     * @ORM\Column(name="action", type="string", length=255)
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dueDate", type="datetime")
     */
    private $dueDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="correctionDate", type="datetime")
     */
    private $correctionDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdDate", type="datetime")
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedDate", type="datetime")
     */
    private $updatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="migration", type="string", length=255)
     */
    private $migration;

    /**
     * @var int
     *
     * @ORM\Column(name="idStatus", type="integer")
     */
    private $idStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="createdBy", type="string", length=255)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="updatedBy", type="string", length=255)
     */
    private $updatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="rootCause", type="string", length=255)
     */
    private $rootCause;

    /**
     * @var int
     *
     * @ORM\Column(name="idAuditDetail", type="integer")
     */
    private $idAuditDetail;


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
     * Set action
     *
     * @param string $action
     *
     * @return FSAPlanAction
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return FSAPlanAction
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set correctionDate
     *
     * @param \DateTime $correctionDate
     *
     * @return FSAPlanAction
     */
    public function setCorrectionDate($correctionDate)
    {
        $this->correctionDate = $correctionDate;

        return $this;
    }

    /**
     * Get correctionDate
     *
     * @return \DateTime
     */
    public function getCorrectionDate()
    {
        return $this->correctionDate;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return FSAPlanAction
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
     * Set updatedDate
     *
     * @param \DateTime $updatedDate
     *
     * @return FSAPlanAction
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Set migration
     *
     * @param string $migration
     *
     * @return FSAPlanAction
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

    /**
     * Set idStatus
     *
     * @param integer $idStatus
     *
     * @return FSAPlanAction
     */
    public function setIdStatus($idStatus)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * Get idStatus
     *
     * @return int
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return FSAPlanAction
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     *
     * @return FSAPlanAction
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set rootCause
     *
     * @param string $rootCause
     *
     * @return FSAPlanAction
     */
    public function setRootCause($rootCause)
    {
        $this->rootCause = $rootCause;

        return $this;
    }

    /**
     * Get rootCause
     *
     * @return string
     */
    public function getRootCause()
    {
        return $this->rootCause;
    }

    /**
     * Set idAuditDetail
     *
     * @param integer $idAuditDetail
     *
     * @return FSAPlanAction
     */
    public function setIdAuditDetail($idAuditDetail)
    {
        $this->idAuditDetail = $idAuditDetail;

        return $this;
    }

    /**
     * Get idAuditDetail
     *
     * @return int
     */
    public function getIdAuditDetail()
    {
        return $this->idAuditDetail;
    }
}

