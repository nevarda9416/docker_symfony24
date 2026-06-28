<?php

namespace src\salleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity
 */
class Membre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MEMBRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=20, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=20, nullable=true)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_TEL", type="integer", nullable=true)
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="text", nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE", type="text", nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_INSC", type="datetime", nullable=true)
     */
    private $dateInsc;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_NAIS", type="string", length=30, nullable=false)
     */
    private $dateNais;



    /**
     * Get idMembre
     *
     * @return integer 
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Membre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Membre
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set numTel
     *
     * @param integer $numTel
     * @return Membre
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    
        return $this;
    }

    /**
     * Get numTel
     *
     * @return integer 
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Membre
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
     * @return Membre
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

    /**
     * Set dateInsc
     *
     * @param \DateTime $dateInsc
     * @return Membre
     */
    public function setDateInsc($dateInsc)
    {
        $this->dateInsc = $dateInsc;
    
        return $this;
    }

    /**
     * Get dateInsc
     *
     * @return \DateTime 
     */
    public function getDateInsc()
    {
        return $this->dateInsc;
    }

    /**
     * Set dateNais
     *
     * @param string $dateNais
     * @return Membre
     */
    public function setDateNais($dateNais)
    {
        $this->dateNais = $dateNais;
    
        return $this;
    }

    /**
     * Get dateNais
     *
     * @return string 
     */
    public function getDateNais()
    {
        return $this->dateNais;
    }
}