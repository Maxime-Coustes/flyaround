<?php

namespace CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reservations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add reservations
     *
     * @param \CoavBundle\Entity\Terrain $reservations
     * @return User
     */
    public function addReservation(\CoavBundle\Entity\Terrain $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \CoavBundle\Entity\Terrain $reservations
     */
    public function removeReservation(\CoavBundle\Entity\Terrain $reservations)
    {
        $this->reservations->removeElement($reservations);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservations()
    {
        return $this->reservations;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;


    /**
     * Add user
     *
     * @param \CoavBundle\Entity\Reservation $user
     * @return User
     */
    public function addUser(\CoavBundle\Entity\Reservation $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \CoavBundle\Entity\Reservation $user
     */
    public function removeUser(\CoavBundle\Entity\Reservation $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}
