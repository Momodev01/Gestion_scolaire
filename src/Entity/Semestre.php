<?php

namespace App\Entity;

use App\Repository\SemestreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SemestreRepository::class)]
class Semestre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 15)]
    private ?string $nomSemestre = null;

    #[ORM\Column]
    private ?bool $etatSemestre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSemestre(): ?string
    {
        return $this->nomSemestre;
    }

    public function setNomSemestre(string $nomSemestre): static
    {
        $this->nomSemestre = $nomSemestre;

        return $this;
    }

    public function isEtatSemestre(): ?bool
    {
        return $this->etatSemestre;
    }

    public function setEtatSemestre(bool $etatSemestre): static
    {
        $this->etatSemestre = $etatSemestre;

        return $this;
    }

    
}
