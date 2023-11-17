<?php

namespace App\Entity;

use App\Repository\PainRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PainRepository::class)]
class Pain
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\OneToOne(mappedBy: 'Pain', cascade: ['persist', 'remove'])]
    private ?Burger $burger = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->type;
    }

    public function setName(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getBurger(): ?Burger
    {
        return $this->burger;
    }

    public function setBurger(Burger $burger): static
    {
        // set the owning side of the relation if necessary
        if ($burger->getPain() !== $this) {
            $burger->setPain($this);
        }

        $this->burger = $burger;

        return $this;
    }
}
