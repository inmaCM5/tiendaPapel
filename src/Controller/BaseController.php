<?php

namespace App\Controller;

use App\Entity\CategoriasPrincipales;
use App\Entity\CategoriasSecundarias;
use App\Entity\Productos;
use App\Entity\Usuarios;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
#[Route('/index', name:'index')]
function index(ManagerRegistry $doctrine): Response
    {
    //$usuarios = $doctrine->getRepository(Usuarios::class)->findAll();
    $categorias = $doctrine->getRepository(CategoriasPrincipales::class)->findAll();    

    //$categoriasSecundarias = [];
    foreach ($categorias as $categoria) {
        /* $categoriasSecundarias[$categoria->getCodigoCatPrincipal()]['categoriaP'] = $categoria;
        $categoriasSecundarias[$categoria->getCodigoCatPrincipal()]['categoriaS'] = $categoria->getCategoriasSecundarias(); */
        $id = $categoria->getId();
        $categoriasSecundarias = $doctrine->getRepository(CategoriasPrincipales::class)->find($id)->getCategoriasSecundarias();
        /* $categoriasSecundarias = $doctrine->getRepository(CategoriasSecundarias::class)->findBy(['codigoCatPrincipalSeC' => $id]); */
    }

    return $this->render('index.html.twig',
        array('categorias' => $categorias, 'categoriasSecundarias' => $categoriasSecundarias)
    );
}

#[Route('/productos/{categoria}', name:'productos')]
function productos(ManagerRegistry $doctrine, $categoria): Response
    {
    $categoriasSecundarias = $doctrine->getRepository(CategoriasSecundarias::class)->findBy(['codigoCatPrincipalSeC' => $categoria]);
    $productos = $doctrine->getRepository(Productos::class)->findBy(['categoria' => $categoriasSecundarias]);
    $categorias = $doctrine->getRepository(CategoriasPrincipales::class)->findAll();
    $categoriasSecundarias = $doctrine->getRepository(CategoriasSecundarias::class)->findAll();

    return $this->render('productos.html.twig',
        array('productos' => $productos, 'categorias' => $categorias, 'categoriasSecundarias' => $categoriasSecundarias));
}

#[Route('/detalles/{producto}', name:'detalles')]
function detalleProducto(ManagerRegistry $doctrine, $producto): Response
    {
    $producto = $doctrine->getRepository(Productos::class)->find($producto);
    $categorias = $doctrine->getRepository(CategoriasPrincipales::class)->findAll();
    $categoriasSecundarias = $doctrine->getRepository(CategoriasSecundarias::class)->findAll();

    return $this->render('detallesProducto.html.twig',
        array('producto' => $producto, 'categorias' => $categorias, 'categoriasSecundarias' => $categoriasSecundarias));
}

#[Route('/productos', name:'productos')]
function productosGlobales(ManagerRegistry $doctrine): Response
    {
    $productos = $doctrine->getRepository(Productos::class)->findAll();
    $categorias = $doctrine->getRepository(CategoriasPrincipales::class)->findAll();
    $categoriasSecundarias = $doctrine->getRepository(CategoriasSecundarias::class)->findAll();
    
    $arrayProductos = array();

    for ($i=0; $i < 21; $i++) { 
        $aleatorio = rand(0, count($productos)-1);
        array_push($arrayProductos, $productos[$aleatorio]);
    }
    
    return $this->render('productos.html.twig',
        array('productos' => array_unique($arrayProductos, SORT_REGULAR), 'categorias' => $categorias, 'categoriasSecundarias' => $categoriasSecundarias));
}

#[Route('/contacto', name: 'contaco')]
public function contacto(ManagerRegistry $doctrine): Response
{
    $categorias = $doctrine->getRepository(CategoriasPrincipales::class)->findAll();    
    $categoriasSecundarias = $doctrine->getRepository(CategoriasSecundarias::class)->findAll();

    return $this->render('contacto.html.twig',
        array('categorias' => $categorias, 'categoriasSecundarias' => $categoriasSecundarias)
    );
}

#[Route('/adminProductos', name:'adminProductos')]
function administrarProductos(ManagerRegistry $doctrine): Response
    {
    $productos = $doctrine->getRepository(Productos::class)->findAll();
    $categorias = $doctrine->getRepository(CategoriasPrincipales::class)->findAll();
    $categoriasSecundarias = $doctrine->getRepository(CategoriasSecundarias::class)->findAll();

    return $this->render('adminProductos.html.twig',
        array('productos' => $productos, 'categorias' => $categorias, 'categoriasSecundarias' => $categoriasSecundarias));
}
}
