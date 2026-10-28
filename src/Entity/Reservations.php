<?php

namespace App\Entity;

use App\Repository\ReservationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationsRepository::class)]
class Reservations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTime $dateDebut = null;

    #[ORM\Column]
    private ?\DateTime $dateFin = null;

    #[ORM\Column(length: 255)]
    private ?string $periodicite = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?commande $commande = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?offre $offre = null;

    /**
     * @var Collection<int, unite>
     */
    #[ORM\OneToMany(targetEntity: Unite::class, mappedBy: 'reservations')]
    private Collection $unite;

    public function __construct()
    {
        $this->unite = new ArrayCollection();
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

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTime $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTime $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getPeriodicite(): ?string
    {
        return $this->periodicite;
    }

    public function setPeriodicite(string $periodicite): static
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCommande(): ?commande
    {
        return $this->commande;
    }

    public function setCommande(?commande $commande): static
    {
        $this->commande = $commande;

        return $this;
    }

    public function getOffre(): ?offre
    {
        return $this->offre;
    }

    public function setOffre(?offre $offre): static
    {
        $this->offre = $offre;

        return $this;
    }

    /**
     * @return Collection<int, unite>
     */
    public function getUnite(): Collection
    {
        return $this->unite;
    }

    public function addUnite(unite $unite): static
    {
        if (!$this->unite->contains($unite)) {
            $this->unite->add($unite);
            $unite->setReservations($this);
        }

        return $this;
    }

    public function removeUnite(unite $unite): static
    {
        if ($this->unite->removeElement($unite)) {
            // set the owning side to null (unless already changed)
            if ($unite->getReservations() === $this) {
                $unite->setReservations(null);
            }
        }

        return $this;
    }
}
