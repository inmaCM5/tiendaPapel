<?php

namespace App\Entity;

use App\Repository\CategoriasSecundariasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriasSecundariasRepository::class)]
class CategoriasSecundarias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $codigoSecundario;

    #[ORM\Column(type: 'string', length: 255)]
    private $nombreCatSecun;

    #[ORM\OneToMany(mappedBy: 'categoria', targetEntity: Productos::class)]
    private $productos;

    #[ORM\ManyToOne(targetEntity: CategoriasPrincipales::class, inversedBy: 'categoriasSecundarias')]
    #[ORM\JoinColumn(nullable: false)]
    private $codigoCatPrincipalSeC;

    public function __construct()
    {
        $this->productos = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigoSecundario(): ?string
    {
        return $this->codigoSecundario;
    }

    public function setCodigoSecundario(string $codigoSecundario): self
    {
        $this->codigoSecundario = $codigoSecundario;

        return $this;
    }

    public function getNombreCatSecun(): ?string
    {
        return $this->nombreCatSecun;
    }

    public function setNombreCatSecun(string $nombreCatSecun): self
    {
        $this->nombreCatSecun = $nombreCatSecun;

        return $this;
    }

    
    /**
     * @return Collection<int, Productos>
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(Productos $producto): self
    {
        if (!$this->productos->contains($producto)) {
            $this->productos[] = $producto;
            $producto->setCategoria($this);
        }

        return $this;
    }

    public function removeProducto(Productos $producto): self
    {
        if ($this->productos->removeElement($producto)) {
            // set the owning side to null (unless already changed)
            if ($producto->getCategoria() === $this) {
                $producto->setCategoria(null);
            }
        }

        return $this;
    }

    public function getCodigoCatPrincipalSeC(): ?CategoriasPrincipales
    {
        return $this->codigoCatPrincipalSeC;
    }

    public function setCodigoCatPrincipalSeC(?CategoriasPrincipales $codigoCatPrincipalSeC): self
    {
        $this->codigoCatPrincipalSeC = $codigoCatPrincipalSeC;

        return $this;
    }

    
}
