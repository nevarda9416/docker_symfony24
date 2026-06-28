<?php

namespace src\salleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sport
 *
 * @ORM\Table(name="sport")
 * @ORM\Entity
 */
class Sport
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_SPORT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSport;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_S", type="string", length=10, nullable=true)
     */
    private $nomS;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBRE_HEURE", type="integer", nullable=true)
     */
    private $nbreHeure;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="decimal", nullable=false)
     */
    private $prix;

    /**
     * @var \Coach
     *
     * @ORM\ManyToOne(targetEntity="Coach")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_COACH", referencedColumnName="ID_COACH")
     * })
     */
    private $idCoach;



    /**
     * Get idSport
     *
     * @return integer 
     */
    public function getIdSport()
    {
        return $this->idSport;
    }

    /**
     * Set nomS
     *
     * @param string $nomS
     * @return Sport
     */
    public function setNomS($nomS)
    {
        $this->nomS = $nomS;
    
        return $this;
    }

    /**
     * Get nomS
     *
     * @return string 
     */
    public function getNomS()
    {
        return $this->nomS;
    }

    /**
     * Set nbreHeure
     *
     * @param integer $nbreHeure
     * @return Sport
     */
    public function setNbreHeure($nbreHeure)
    {
        $this->nbreHeure = $nbreHeure;
    
        return $this;
    }

    /**
     * Get nbreHeure
     *
     * @return integer 
     */
    public function getNbreHeure()
    {
        return $this->nbreHeure;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Sport
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set idCoach
     *
     * @param \src\salleBundle\Entity\Coach $idCoach
     * @return Sport
     */
    public function setIdCoach(\src\salleBundle\Entity\Coach $idCoach = null)
    {
        $this->idCoach = $idCoach;
    
        return $this;
    }

    /**
     * Get idCoach
     *
     * @return \src\salleBundle\Entity\Coach 
     */
    public function getIdCoach()
    {
        return $this->idCoach;
    }
}