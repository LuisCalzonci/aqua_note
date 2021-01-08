<?php



namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Notes

    /**
     * @ORM\Entity
     * @ORM\Table(name="notes")
     */
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="desc", nullable=true)
     */
    private $desc;


    /**
     * @ORM\Column(type="string", name="started", nullable=true)
     */
    private $started;

    /**
     * @ORM\Column(type="string", name="migrations", nullable=true)
     */
    private $migrations;

    /**
     * @ORM\Column(type="string", name="status", nullable=true)
     */
    private $status;
    


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
     * Set desc
     *
     * @param string $desc
     *
     * @return Notes
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set started
     *
     * @param string $started
     *
     * @return Notes
     */
    public function setStarted($started)
    {
        $this->started = $started;

        return $this;
    }

    /**
     * Get started
     *
     * @return string
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * Set migrations
     *
     * @param string $migrations
     *
     * @return Notes
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

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Notes
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
