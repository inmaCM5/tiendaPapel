<?php

namespace App\Entity;

use App\Repository\CategoriasPrincipalesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriasPrincipalesRepository::class)]
class CategoriasPrincipales
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $codigoCatPrincipal;

    #[ORM\Column(type: 'string', length: 255)]
    private $nombreCatPrincipal;

    #[ORM\OneToMany(mappedBy: 'codigoCatPrincipalSeC', targetEntity: CategoriasSecundarias::class)]
    private $categoriasSecundarias;

    public function __construct()
    {
        $this->categoriasSecundarias = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigoCatPrincipal(): ?string
    {
        return $this->codigoCatPrincipal;
    }

    public function setCodigoCatPrincipal(string $codigoCatPrincipal): self
    {
        $this->codigoCatPrincipal = $codigoCatPrincipal;

        return $this;
    }

    public function getNombreCatPrincipal(): ?string
    {
        return $this->nombreCatPrincipal;
    }

    public function setNombreCatPrincipal(string $nombreCatPrincipal): self
    {
        $this->nombreCatPrincipal = $nombreCatPrincipal;

        return $this;
    }

    /**
     * @return Collection<int, CategoriasSecundarias>
     */
    public function getCategoriasSecundarias(): Collection
    {
        return $this->categoriasSecundarias;
    }

    public function addCategoriasSecundaria(CategoriasSecundarias $categoriasSecundaria): self
    {
        if (!$this->categoriasSecundarias->contains($categoriasSecundaria)) {
            $this->categoriasSecundarias[] = $categoriasSecundaria;
            $categoriasSecundaria->setCodigoCatPrincipalSeC($this);
        }

        return $this;
    }

    public function removeCategoriasSecundaria(CategoriasSecundarias $categoriasSecundaria): self
    {
        if ($this->categoriasSecundarias->removeElement($categoriasSecundaria)) {
            // set the owning side to null (unless already changed)
            if ($categoriasSecundaria->getCodigoCatPrincipalSeC() === $this) {
                $categoriasSecundaria->setCodigoCatPrincipalSeC(null);
            }
        }

        return $this;
    }
}
