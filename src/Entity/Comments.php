<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentsRepository::class)]
class Comments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $datetime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatetime(): ?int
    {
        return $this->datetime;
    }

    public function setDatetime(int $datetime): self
    {
        $this->datetime = $datetime;

        return $this;
    }
}
