<?php

namespace App\Entity;

use App\Repository\ParisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParisRepository::class)]
class Paris
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Ville = null;

    #[ORM\Column(length: 255)]
    private ?string $PSG = null;

    #[ORM\Column(length: 255)]
    private ?string $Capital = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): static
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getPSG(): ?string
    {
        return $this->PSG;
    }

    public function setPSG(string $PSG): static
    {
        $this->PSG = $PSG;

        return $this;
    }

    public function getCapital(): ?string
    {
        return $this->Capital;
    }

    public function setCapital(string $Capital): static
    {
        $this->Capital = $Capital;

        return $this;
    }
}
