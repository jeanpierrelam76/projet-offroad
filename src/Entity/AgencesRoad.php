<?php

namespace App\Entity;

use App\Repository\AgencesRoadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgencesRoadRepository::class)]
class AgencesRoad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse = null;

    #[ORM\Column(length: 15)]
    private ?string $Contact = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $EPI = null;

    #[ORM\Column(length: 100,nullable: true)]
    private ?string $Regime = null;

    #[ORM\Column(nullable: true)]
    private ?float $Renumeration = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $Lien = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): static
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->Contact;
    }

    public function setContact(string $Contact): static
    {
        $this->Contact = $Contact;

        return $this;
    }

    public function getEPI(): ?string
    {
        return $this->EPI;
    }

    public function setEPI(string $EPI): static
    {
        $this->EPI = $EPI;

        return $this;
    }

    public function getRegime(): ?string
    {
        return $this->Regime;
    }

    public function setRegime(string $Regime): static
    {
        $this->Regime = $Regime;

        return $this;
    }

    public function getRenumeration(): ?float
    {
        return $this->Renumeration;
    }

    public function setRenumeration(?float $Renumeration): static
    {
        $this->Renumeration = $Renumeration;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->Lien;
    }

    public function setLien(?string $Lien): static
    {
        $this->Lien = $Lien;

        return $this;
    }
}
