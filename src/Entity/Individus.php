<?php

namespace App\Entity;

use App\Repository\IndividusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IndividusRepository::class)
 */
class Individus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $nom_individu;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $prenom_individu;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse_individu;
    
    /**
     * @ORM\Column(type="text")
     */
    private $type_individu;

    //Id
    public function getId(): ?int
    {
        return $this->id;
    }
    // nom individu
    public function getNomIndividu(): ?string
    {
        return $this->nom_individu;
    }

    public function setNomIndividu(string $nom_individu): self
    {
        $this->nom_individu = $nom_individu;

        return $this;
    }

    //prenom individu
    public function getPrenomIndividu(): ?string
    {
        return $this->prenom_individu;
    }

    public function setPrenomIndividu(string $prenom_individu): self
    {
        $this->prenom_individu = $prenom_individu;

        return $this;
    }

    //Adresse individu
    public function getAdresseIndividu(): ?string
    {
        return $this->adresse_individu;
    }

    public function setAdresseIndividu(string $adresse_individu): self
    {
        $this->adresse_individu = $adresse_individu;

        return $this;
    }

    public function getTypeIndividu(): ?string
    {
        return $this->type_individu;
    }
  
    public function setTypeIndividu(string $type_individu): self
    {
        $this->type_individu = $type_individu;
  
        return $this;
    }
}
