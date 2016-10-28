<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Validator\Constraints as Assert;

/**
 * events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\eventsRepository")
 */
class events {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ET1", type="integer")
     */
    protected $eT1;

    /**
     * @var int
     *
     * @ORM\Column(name="ET2", type="integer")
     */
    protected $eT2;

    /**
     * @ORM\OneToOne(targetEntity="users", inversedBy="event")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
        protected $user;
        
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param users $user
     * @return events
     */
    public function setUser($user) {
        $this->user = $user;
    
        return $this;
    }
    
    /**
     * Get user
     *
     * @return events
     */
    public function getUser() {
        return $this->user;
    }

    
    /**
     * Set eT1
     *
     * @param integer $eT1
     * @return events
     */
    public function setET1($eT1) {
        $this->eT1 = $eT1;

        return $this;
    }

    /**
     * Get eT1
     *
     * @return integer 
     */
    public function getET1() {
        return $this->eT1;
    }

    /**
     * Set eT2
     *
     * @param integer $eT2
     * @return events
     */
    public function setET2($eT2) {
        $this->eT2 = $eT2;

        return $this;
    }

    /**
     * Get eT2
     *
     * @return integer 
     */
    public function getET2() {
        return $this->eT2;
    }

}
