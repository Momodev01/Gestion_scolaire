<?php

namespace App\Entity;

use App\Repository\ProfesseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfesseurRepository::class)]
class Professeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomProf = null;

    #[ORM\Column(length: 50)]
    private ?string $prenomProf = null;

    #[ORM\Column(length: 25)]
    private ?string $gradeProf = null;

    #[ORM\Column(length: 50)]
    private ?string $specialiteProf = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProf(): ?string
    {
        return $this->nomProf;
    }

    public function setNomProf(string $nomProf): static
    {
        $this->nomProf = $nomProf;

        return $this;
    }

    public function getPrenomProf(): ?string
    {
        return $this->prenomProf;
    }

    public function setPrenomProf(string $prenomProf): static
    {
        $this->prenomProf = $prenomProf;

        return $this;
    }

    public function getGradeProf(): ?string
    {
        return $this->gradeProf;
    }

    public function setGradeProf(string $gradeProf): static
    {
        $this->gradeProf = $gradeProf;

        return $this;
    }

    public function getSpecialiteProf(): ?string
    {
        return $this->specialiteProf;
    }

    public function setSpecialiteProf(string $specialiteProf): static
    {
        $this->specialiteProf = $specialiteProf;

        return $this;
    }
}
