<?php

namespace src\salleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite")
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_act", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAct;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="text", nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Image_act", type="text", nullable=true)
     */
    private $imageAct;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_act", type="text", nullable=false)
     */
    private $dateAct;



    /**
     * Get idAct
     *
     * @return integer 
     */
    public function getIdAct()
    {
        return $this->idAct;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Actualite
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Actualite
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set imageAct
     *
     * @param string $imageAct
     * @return Actualite
     */
    public function setImageAct($imageAct)
    {
        $this->imageAct = $imageAct;
    
        return $this;
    }

    /**
     * Get imageAct
     *
     * @return string 
     */
    public function getImageAct()
    {
        return $this->imageAct;
    }

    /**
     * Set dateAct
     *
     * @param string $dateAct
     * @return Actualite
     */
    public function setDateAct($dateAct)
    {
        $this->dateAct = $dateAct;
    
        return $this;
    }

    /**
     * Get dateAct
     *
     * @return string 
     */
    public function getDateAct()
    {
        return $this->dateAct;
    }
}