<?php

namespace src\salleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apartient
 *
 * @ORM\Table(name="apartient")
 * @ORM\Entity
 */
class Apartient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_app", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idApp;

    /**
     * @var \Abonement
     *
     * @ORM\ManyToOne(targetEntity="Abonement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ABONEMENT", referencedColumnName="ID_ABONEMENT")
     * })
     */
    private $idAbonement;

    /**
     * @var \Sport
     *
     * @ORM\ManyToOne(targetEntity="Sport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SPORT", referencedColumnName="ID_SPORT")
     * })
     */
    private $idSport;



    /**
     * Get idApp
     *
     * @return integer 
     */
    public function getIdApp()
    {
        return $this->idApp;
    }

    /**
     * Set idAbonement
     *
     * @param \src\salleBundle\Entity\Abonement $idAbonement
     * @return Apartient
     */
    public function setIdAbonement(\src\salleBundle\Entity\Abonement $idAbonement = null)
    {
        $this->idAbonement = $idAbonement;
    
        return $this;
    }

    /**
     * Get idAbonement
     *
     * @return \src\salleBundle\Entity\Abonement 
     */
    public function getIdAbonement()
    {
        return $this->idAbonement;
    }

    /**
     * Set idSport
     *
     * @param \src\salleBundle\Entity\Sport $idSport
     * @return Apartient
     */
    public function setIdSport(\src\salleBundle\Entity\Sport $idSport = null)
    {
        $this->idSport = $idSport;
    
        return $this;
    }

    /**
     * Get idSport
     *
     * @return \src\salleBundle\Entity\Sport 
     */
    public function getIdSport()
    {
        return $this->idSport;
    }
}