<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\usersRepository")
 */
class users extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
//    /**
//     * @ORM\Column(type="string", length=255)
//     *
//     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
//     * @Assert\Length(
//     *     min=3,
//     *     max=255,
//     *     minMessage="The name is too short.",
//     *     maxMessage="The name is too long.",
//     *     groups={"Registration", "Profile"}
//     * )
//     */
//    protected $name;
    
        /**
     * Get id
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @ORM\OneToOne(targetEntity="events", mappedBy="user")
     */
    protected $event;
    
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->event = new ArrayCollection();
        //$this->id = $id;
        //$this->name = $name;   
         }
    
    }
