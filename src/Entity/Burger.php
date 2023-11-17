<?php

namespace App\Entity;

use App\Repository\BurgerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BurgerRepository::class)]
class Burger
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToOne(inversedBy: 'burger', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pain $Pain = null;

		#[ORM\OneToMany(mappedBy: 'Burger', targetEntity: Oignon::class, cascade: ['persist', 'remove'])]
		#[ORM\JoinColumn(nullable: false)]
		private ?Oignon $Oignon = null;

		#[ORM\OneToOne(inversedBy: 'Burger', cascade: ['persist', 'remove'])]
		private ?Image $Image = null;

		#[ORM\OneToOne(inversedBy: 'Burger', cascade: ['persist', 'remove'])]
		private ?Commentaire $Commentaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPain(): ?Pain
    {
        return $this->Pain;
    }

    public function setPain(Pain $Pain): static
    {
        $this->Pain = $Pain;

        return $this;
    }

	public function getOignon(): ?Oignon
	{
		return $this->Oignon;
	}

	public function setOignon(?Oignon $Oignon): void
	{
		$this->Oignon = $Oignon;
	}

	public function getImage(): ?Image
	{
		return $this->Image;
	}

	public function setImage(?Image $Image): void
	{
		$this->Image = $Image;
	}

	public function getCommentaire(): ?Commentaire
	{
		return $this->Commentaire;
	}

	public function setCommentaire(?Commentaire $Commentaire): void
	{
		$this->Commentaire = $Commentaire;
	}
}
