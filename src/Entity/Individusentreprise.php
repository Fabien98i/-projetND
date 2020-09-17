<?php

namespace App\Entity;

use App\Repository\IndividusentrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IndividusentrepriseRepository::class)
 */
class Individusentreprise
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=entreprises::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $fid_ind;

    /**
     * @ORM\OneToOne(targetEntity=individus::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $fid_individu;

    /**
     * @ORM\Column(type="text")
     */
    private $intitule_poste;

    /**
     * @ORM\Column(type="text")
     */
    private $nom_tuteur;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin;

    /**
     * @ORM\Column(type="text")
     */
    private $description_poste;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFidInd(): ?entreprises
    {
        return $this->fid_ind;
    }

    public function setFidInd(entreprises $fid_ind): self
    {
        $this->fid_ind = $fid_ind;

        return $this;
    }

    public function getFidIndividu(): ?individus
    {
        return $this->fid_individu;
    }

    public function setFidIndividu(individus $fid_individu): self
    {
        $this->fid_individu = $fid_individu;

        return $this;
    }

    public function getIntitulePoste(): ?string
    {
        return $this->intitule_poste;
    }

    public function setIntitulePoste(string $intitule_poste): self
    {
        $this->intitule_poste = $intitule_poste;

        return $this;
    }

    public function getNomTuteur(): ?string
    {
        return $this->nom_tuteur;
    }

    public function setNomTuteur(string $nom_tuteur): self
    {
        $this->nom_tuteur = $nom_tuteur;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getDescriptionPoste(): ?string
    {
        return $this->description_poste;
    }

    public function setDescriptionPoste(string $description_poste): self
    {
        $this->description_poste = $description_poste;

        return $this;
    }
}
