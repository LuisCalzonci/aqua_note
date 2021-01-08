<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Genus
    /**
     * @ORM\Entity
     * @ORM\Table(name="genus")
     */
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $subFamily;
    /**
     * @ORM\Column(type="integer",  nullable=true)
     */
    private $speciesCount;
    /**
     * @ORM\Column(type="string",  nullable=true)
     */
    private $funFact;


    /**
     * @ORM\Column(type="string",  nullable=true)
     */
    private  $status;

    /**
     * @ORM\Column (type="string", nullable=true)
     */
    private $migration;

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getSubFamily()
    {
        return $this->subFamily;
    }
    public function setSubFamily($subFamily)
    {
        $this->subFamily = $subFamily;
    }
    public function getSpeciesCount()
    {
        return $this->speciesCount;
    }
    public function setSpeciesCount($speciesCount)
    {
        $this->speciesCount = $speciesCount;
    }
    public function getFunFact()
    {
        return $this->funFact;
    }

    public function setFunFact($funFact)
    {
        $this->funFact = $funFact;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getMigration()
    {
        return $this->migration;
    }

    /**
     * @param mixed $migration
     */
    public function setMigration($migration)
    {
        $this->migration = $migration;
    }


}