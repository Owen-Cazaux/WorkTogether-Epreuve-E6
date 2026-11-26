<?php

namespace App\Entity;

use App\Repository\UniteRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: UniteRepository::class)]
class Unite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /** @var Collection<int, Intervention> */
    #[ORM\ManyToMany(targetEntity: Intervention::class, inversedBy: 'unite')]
    private Collection $intervention;

    #[ORM\ManyToOne(inversedBy: 'unites')]
    private ?Etat $Etat = null;

    #[ORM\ManyToOne(inversedBy: 'unites')]
    private ?Baie $baie = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\ManyToOne(inversedBy: 'unite')]
    private ?Reservations $reservations = null;

    public function __construct()
    {
        $this->intervention = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getIntervention(): Collection
    {
        return $this->intervention;
    }

    public function addIntervention(Intervention $intervention): static
    {
        if (!$this->intervention->contains($intervention)) {
            $this->intervention->add($intervention);
        }
        return $this;
    }

    public function removeIntervention(Intervention $intervention): static
    {
        $this->intervention->removeElement($intervention);
        return $this;
    }

    public function getEtat(): ?Etat
    {
        return $this->Etat;
    }

    public function setEtat(?Etat $Etat): static
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getBaie(): ?Baie
    {
        return $this->baie;
    }

    public function setBaie(?Baie $baie): static
    {
        $this->baie = $baie;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getReservations(): ?Reservations
    {
        return $this->reservations;
    }

    public function setReservations(?Reservations $reservations): static
    {
        $this->reservations = $reservations;

        return $this;
    }
}
