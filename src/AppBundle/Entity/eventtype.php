<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * eventtype
 *
 * @ORM\Table(name="eventtype")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\eventtypeRepository")
 */
class eventtype
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="EventName", type="string", length=255)
     */
    protected $eventName;


    /**
     * @var int
     *
     * @ORM\Column(name="MaxLimit", type="integer")
     */
    protected $maxLimit;


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
     * Set eventName
     *
     * @param string $eventName
     * @return eventtype
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string 
     */
    public function getEventName()
    {
        return $this->eventName;
    }


    /**
     * Set maxLimit
     *
     * @param integer $maxLimit
     * @return eventtype
     */
    public function setMaxLimit($maxLimit)
    {
        $this->maxLimit = $maxLimit;

        return $this;
    }

    /**
     * Get maxLimit
     *
     * @return integer 
     */
    public function getMaxLimit()
    {
        return $this->maxLimit;
    }

//    public function __construct()
//    {
//        parent::__construct();
////        $this->id = $id;
////        $this->eventName = $eventName;
////        $this->maxLimit = $maxLimit;
//    }
//    
    }

  //  $x = new eventtype();
    
    