<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
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

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $foto;

    /**
     * @Vich\UploadableField(mapping="producto_foto", fileNameProperty="foto")
     * @var File
     */
    private $imageFile;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private $pp;

    #[ORM\ManyToOne(targetEntity: Categoria::class, inversedBy: 'productos')]
    #[ORM\JoinColumn(nullable: false)]
    private $categoria;

    #[ORM\Column(type: 'integer')]
    private $unidades;

    #[ORM\Column(type: 'string', length: 255)]
    private $proveedor;

    #[ORM\OneToMany(mappedBy: 'codProducto', targetEntity: PedidosProducto::class)]
    private $productosPedidos;

    public function __construct()
    {
        $this->productosPedidos = new ArrayCollection();
    }
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

    public function getUnidades(): ?int
    {
        return $this->unidades;
    }

    public function setUnidades(int $unidades): self
    {
        $this->unidades = $unidades;

        return $this;
    }

    public function getProveedor(): ?string
    {
        return $this->proveedor;
    }

    public function setProveedor(string $proveedor): self
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * @return Collection<int, PedidosProducto>
     */
    public function getProductosPedidos(): Collection
    {
        return $this->productosPedidos;
    }

    public function addProductosPedido(PedidosProducto $productosPedido): self
    {
        if (!$this->productosPedidos->contains($productosPedido)) {
            $this->productosPedidos[] = $productosPedido;
            $productosPedido->setCodProducto($this);
        }

        return $this;
    }

    public function removeProductosPedido(PedidosProducto $productosPedido): self
    {
        if ($this->productosPedidos->removeElement($productosPedido)) {
            // set the owning side to null (unless already changed)
            if ($productosPedido->getCodProducto() === $this) {
                $productosPedido->setCodProducto(null);
            }
        }

        return $this;
    }

    public function setImageFile(File $foto = null)
    {
        $this->imageFile = $foto;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($foto)
    {
        $this->foto = $foto;
    }

    public function getImage()
    {
        return $this->foto;
    }
}
