<?php

namespace src\salleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coach
 *
 * @ORM\Table(name="coach")
 * @ORM\Entity
 */
class Coach
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COACH", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCoach;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_C", type="string", length=20, nullable=true)
     */
    private $nomC;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM_C", type="string", length=20, nullable=true)
     */
    private $prenomC;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_TEL_C", type="integer", nullable=true)
     */
    private $numTelC;

    /**
     * @var integer
     *
     * @ORM\Column(name="SALAIRE", type="integer", nullable=true)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=50, nullable=false)
     */
    private $email;


    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=false)
     */
    private $image;

    /**
     * Get idCoach
     *
     * @return integer 
     */
    public function getIdCoach()
    {
        return $this->idCoach;
    }

    /**
     * Set nomC
     *
     * @param string $nomC
     * @return Coach
     */
    public function setNomC($nomC)
    {
        $this->nomC = $nomC;
    
        return $this;
    }

    /**
     * Get nomC
     *
     * @return string 
     */
    public function getNomC()
    {
        return $this->nomC;
    }

    /**
     * Set prenomC
     *
     * @param string $prenomC
     * @return Coach
     */
    public function setPrenomC($prenomC)
    {
        $this->prenomC = $prenomC;
    
        return $this;
    }

    /**
     * Get prenomC
     *
     * @return string 
     */
    public function getPrenomC()
    {
        return $this->prenomC;
    }

    /**
     * Set numTelC
     *
     * @param integer $numTelC
     * @return Coach
     */
    public function setNumTelC($numTelC)
    {
        $this->numTelC = $numTelC;
    
        return $this;
    }

    /**
     * Get numTelC
     *
     * @return integer 
     */
    public function getNumTelC()
    {
        return $this->numTelC;
    }

    /**
     * Set salaire
     *
     * @param integer $salaire
     * @return Coach
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    
        return $this;
    }

    /**
     * Get salaire
     *
     * @return integer 
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Coach
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set image
     *
     * @param string $image
     * @return Coach
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    
}