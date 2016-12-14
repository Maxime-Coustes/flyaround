<?php

namespace CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaneModel
 */
class PlaneModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var int
     */
    private $cruiseSpeed;

    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var string
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
     * Set model
     *
     * @param string $model
     * @return PlaneModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return PlaneModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cruiseSpeed
     *
     * @param integer $cruiseSpeed
     * @return PlaneModel
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;

        return $this;
    }

    /**
     * Get cruiseSpeed
     *
     * @return integer 
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * Set nbSeats
     *
     * @param integer $nbSeats
     * @return PlaneModel
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get nbSeats
     *
     * @return integer 
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return PlaneModel
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departures;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add departures
     *
     * @param \CoavBundle\Entity\Flight $departures
     * @return PlaneModel
     */
    public function addDeparture(\CoavBundle\Entity\Flight $departures)
    {
        $this->departures[] = $departures;

        return $this;
    }

    /**
     * Remove departures
     *
     * @param \CoavBundle\Entity\Flight $departures
     */
    public function removeDeparture(\CoavBundle\Entity\Flight $departures)
    {
        $this->departures->removeElement($departures);
    }

    /**
     * Get departures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartures()
    {
        return $this->departures;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $PlaneModel;


    /**
     * Add PlaneModel
     *
     * @param \CoavBundle\Entity\Flight $planeModel
     * @return PlaneModel
     */
    public function addPlaneModel(\CoavBundle\Entity\Flight $planeModel)
    {
        $this->PlaneModel[] = $planeModel;

        return $this;
    }

    /**
     * Remove PlaneModel
     *
     * @param \CoavBundle\Entity\Flight $planeModel
     */
    public function removePlaneModel(\CoavBundle\Entity\Flight $planeModel)
    {
        $this->PlaneModel->removeElement($planeModel);
    }

    /**
     * Get PlaneModel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlaneModel()
    {
        return $this->PlaneModel;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $plane;


    /**
     * Add plane
     *
     * @param \CoavBundle\Entity\Flight $plane
     * @return PlaneModel
     */
    public function addPlane(\CoavBundle\Entity\Flight $plane)
    {
        $this->plane[] = $plane;

        return $this;
    }

    /**
     * Remove plane
     *
     * @param \CoavBundle\Entity\Flight $plane
     */
    public function removePlane(\CoavBundle\Entity\Flight $plane)
    {
        $this->plane->removeElement($plane);
    }

    /**
     * Get plane
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlane()
    {
        return $this->plane;
    }
}
