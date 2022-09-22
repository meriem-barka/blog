<?php

namespace App\Entity;

use App\Repository\ArticlesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticlesRepository::class)]
class Articles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $picture = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Users $no = null;

    #[ORM\Column(length: 255)]
    private ?string $contenant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getNo(): ?Users
    {
        return $this->no;
    }

    public function setNo(?Users $no): self
    {
        $this->no = $no;

        return $this;
    }

    public function getContenant(): ?string
    {
        return $this->contenant;
    }

    public function setContenant(string $contenant): self
    {
        $this->contenant = $contenant;

        return $this;
    }
}
