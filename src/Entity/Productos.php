<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductosRepository::class)]
class Productos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $codigo;

    #[ORM\Column(type: 'string', length: 255)]
    private $nombre;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $descripcion;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private $pvp;


    #[ORM\Column(type: 'blob')]
    private $imagen;
    private $rawImagen;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private $pp;

    #[ORM\ManyToOne(targetEntity: Categoria::class, inversedBy: 'productos')]
    #[ORM\JoinColumn(nullable: false)]
    private $categoria;
    public function displayImagen()
    {
        if(null === $this->rawImagen) {
            $this->rawImagen = "data:image/png;base64," . base64_encode(stream_get_contents($this->getImagen()));
        }
    
        return $this->rawImagen;
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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPvp(): ?string
    {
        return $this->pvp;
    }

    public function setPvp(string $pvp): self
    {
        $this->pvp = $pvp;

        return $this;
    }


    public function getImagenCodificada()
    {
        $imagen = base64_encode($this->imagen);
        return $imagen;
    } 

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getPp(): ?string
    {
        return $this->pp;
    }

    public function setPp(string $pp): self
    {
        $this->pp = $pp;

        return $this;
    }

    public function getCategoria(): ?categoria
    {
        return $this->categoria;
    }

    public function setCategoria(?categoria $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }
}
