<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateCours = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?int $nbrHeureGlobale = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCours(): ?\DateTimeInterface
    {
        return $this->dateCours;
    }

    public function setDateCours(\DateTimeInterface $dateCours): static
    {
        $this->dateCours = $dateCours;

        return $this;
    }

    public function getNbrHeureGlobale(): ?int
    {
        return $this->nbrHeureGlobale;
    }

    public function setNbrHeureGlobale(int $nbrHeureGlobale): static
    {
        $this->nbrHeureGlobale = $nbrHeureGlobale;

        return $this;
    }

}
