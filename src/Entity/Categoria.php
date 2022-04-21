<?php

namespace App\Entity;

use App\Repository\CategoriaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriaRepository::class)]
class Categoria
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $codigo;

    #[ORM\Column(type: 'string', length: 255)]
    private $nombre;

    #[ORM\OneToMany(mappedBy: 'parents', targetEntity: Categoria::class)]
    private $childrens;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'childrens')]
    private $parents;

    public function __construct()
    {
        $this->childrens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return Collection<int, Categoria>
     */
    public function getChildrens(): Collection
    {
        return $this->childrens;
    }

    public function addChildren(Categoria $children): self
    {
        if (!$this->childrens->contains($children)) {
            $this->childrens[] = $children;
            $children->setParents($this);
        }

        return $this;
    }

    public function removeChildren(Categoria $children): self
    {
        if ($this->childrens->removeElement($children)) {
            // set the owning side to null (unless already changed)
            if ($children->getParents() === $this) {
                $children->setParents(null);
            }
        }

        return $this;
    }

    public function getParents(): ?self
    {
        return $this->parents;
    }

    public function setParents(?self $parents): self
    {
        $this->parents = $parents;

        return $this;
    }

}
