<?php

namespace App\Entity;

use App\Repository\IndividusformationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IndividusformationRepository::class)
 */
class Individusformation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=individus::class, cascade={"persist", "remove"})
     */
    private $fid_ind;

    /**
     * @ORM\OneToOne(targetEntity=formation::class, cascade={"persist", "remove"})
     */
    private $fid_form;

    /**
     * @ORM\Column(type="integer")
     */
    private $statut;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $data;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFidInd(): ?individus
    {
        return $this->fid_ind;
    }

    public function setFidInd(?individus $fid_ind): self
    {
        $this->fid_ind = $fid_ind;

        return $this;
    }

    public function getFidForm(): ?formation
    {
        return $this->fid_form;
    }

    public function setFidForm(?formation $fid_form): self
    {
        $this->fid_form = $fid_form;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getData(): ?int
    {
        return $this->data;
    }

    public function setData(?int $data): self
    {
        $this->data = $data;

        return $this;
    }
}
