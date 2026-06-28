<?php

namespace src\salleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonement
 *
 * @ORM\Table(name="abonement")
 * @ORM\Entity
 */
class Abonement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ABONEMENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAbonement;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL", type="decimal", nullable=true)
     */
    private $total;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_INSCRIPTION", type="datetime", nullable=true)
     */
    private $dateInscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="DUREE", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ETATABONEMENT", type="boolean", nullable=true)
     */
    private $etatabonement;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_MEMBRE", referencedColumnName="ID_MEMBRE")
     * })
     */
    private $idMembre;



    /**
     * Get idAbonement
     *
     * @return integer 
     */
    public function getIdAbonement()
    {
        return $this->idAbonement;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return Abonement
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Abonement
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    
        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     * @return Abonement
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    
        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set etatabonement
     *
     * @param boolean $etatabonement
     * @return Abonement
     */
    public function setEtatabonement($etatabonement)
    {
        $this->etatabonement = $etatabonement;
    
        return $this;
    }

    /**
     * Get etatabonement
     *
     * @return boolean 
     */
    public function getEtatabonement()
    {
        return $this->etatabonement;
    }

    /**
     * Set idMembre
     *
     * @param \src\salleBundle\Entity\Membre $idMembre
     * @return Abonement
     */
    public function setIdMembre(\src\salleBundle\Entity\Membre $idMembre = null)
    {
        $this->idMembre = $idMembre;
    
        return $this;
    }

    /**
     * Get idMembre
     *
     * @return \src\salleBundle\Entity\Membre 
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }
}