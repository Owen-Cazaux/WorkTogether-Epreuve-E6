<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Administrateur>
     */
    #[ORM\ManyToMany(targetEntity: Administrateur::class, inversedBy: 'offres')]
    private Collection $administrateur;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $nombreUnites = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prixMensuel = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $remisePourcentage = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $remiseAnnuellePourcentage = null;

    public function __construct()
    {
        $this->administrateur = new ArrayCollection();
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

    /**
     * @return Collection<int, Administrateur>
     */
    public function getAdministrateur(): Collection
    {
        return $this->administrateur;
    }

    public function addAdministrateur(Administrateur $administrateur): static
    {
        if (!$this->administrateur->contains($administrateur)) {
            $this->administrateur->add($administrateur);
        }

        return $this;
    }

    public function removeAdministrateur(Administrateur $administrateur): static
    {
        $this->administrateur->removeElement($administrateur);

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

    public function getNombreUnites(): ?int
    {
        return $this->nombreUnites;
    }

    public function setNombreUnites(int $nombreUnites): static
    {
        $this->nombreUnites = $nombreUnites;

        return $this;
    }

    public function getPrixMensuel(): ?string
    {
        return $this->prixMensuel;
    }

    public function setPrixMensuel(string $prixMensuel): static
    {
        $this->prixMensuel = $prixMensuel;

        return $this;
    }

    public function getRemisePourcentage(): ?string
    {
        return $this->remisePourcentage;
    }

    public function setRemisePourcentage(string $remisePourcentage): static
    {
        $this->remisePourcentage = $remisePourcentage;

        return $this;
    }

    public function getRemiseAnnuellePourcentage(): ?string
    {
        return $this->remiseAnnuellePourcentage;
    }

    public function setRemiseAnnuellePourcentage(string $remiseAnnuellePourcentage): static
    {
        $this->remiseAnnuellePourcentage = $remiseAnnuellePourcentage;

        return $this;
    }
}
