<?php

namespace App\Controller;

use App\Entity\CategoriasPrincipales;
use App\Entity\CategoriasSecundarias;
use App\Entity\Productos;
use App\Entity\Usuarios;
use App\Entity\Categoria;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
#[Route('/index', name:'index')]
function index(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('index.html.twig',
        array('categorias' => $categorias, 'cesta' => $cesta->get_productos(), 
        'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta())
    );
}

#[Route('/productos/{categoria}', name:'productosCat')]
function productos(ManagerRegistry $doctrine, $categoria, CestaCompra $cesta): Response
{
    $productos = $doctrine->getRepository(Productos::class)->findBy(['categoria' => $categoria]);
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('productos.html.twig',
        array('categorias' => $categorias, 'productos' => $productos,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/detalles/{producto}', name:'detalles')]
function detalleProducto(ManagerRegistry $doctrine, $producto, CestaCompra $cesta): Response
{
    $producto = $doctrine->getRepository(Productos::class)->find($producto);
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('detallesProducto.html.twig',
        array('producto' => $producto, 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/productos', name:'productos')]
function productosGlobales(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $productos = $doctrine->getRepository(Productos::class)->findAll();
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    $arrayProductos = array();

    for ($i=0; $i < 21; $i++) { 
        $aleatorio = rand(0, count($productos)-1);
        array_push($arrayProductos, $productos[$aleatorio]);
    }

    return $this->render('productos.html.twig',
        array('productos' => array_unique($arrayProductos, SORT_REGULAR), 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/contacto', name: 'contacto')]
public function contacto(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('contacto.html.twig',
        array('categorias' => $categorias, 'cesta' => $cesta->get_productos(), 
        'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/adminProductos', name:'adminProductos')]
function administrarProductos(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $productos = $doctrine->getRepository(Productos::class)->findAll();
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('adminProductos.html.twig',
        array('productos' => $productos, 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/anadirProducto', name:'anadirProducto')]
function anadirProducto(ManagerRegistry $doctrine, CestaCompra $cesta): Response
{
    $productos = $doctrine->getRepository(Productos::class)->findAll();
    $categoriaPrincipal = $doctrine->getRepository(Categoria::class)->findBy(['parents' => null]);    
    $categorias=[];

    foreach ($categoriaPrincipal as $categoria) {
        $categorias[$categoria->getId()][0]= $categoria;
        $categorias[$categoria->getId()][1]= $doctrine->getRepository(Categoria::class)->findBy(['parents' => $categoria->getId()]);
    }

    return $this->render('anadirProducto.html.twig',
        array('productos' => $productos, 'categorias' => $categorias,
        'cesta' => $cesta->get_productos(), 'precioCesta' => $cesta->get_coste(), 'unidades' => $cesta->unidadesCesta()));
}

#[Route('/anadir/{idProducto}', name:'anadir')]
public function anadir(ManagerRegistry $doctrine, $idProducto, CestaCompra $cesta): Response {
    $producto = $doctrine->getRepository(Productos::class)->find($idProducto);
    $cesta->carga_articulo($producto, $_POST['unidades']);
    return $this->redirectToRoute('productos');
}

#[Route('/cambiarUnidades/{idProducto}', name:'cambiarUnidades')]
public function cambiarUnidades(ManagerRegistry $doctrine, $idProducto, CestaCompra $cesta): Response {
    $producto = $doctrine->getRepository(Productos::class)->find($idProducto);
    $cesta->cambiar_unidades($producto, $_POST['unidades']);
    return $this->redirectToRoute('productos');
}

#[Route('/eliminarProductosCesta/{idProducto}', name:'eliminarProductosCesta')]
public function eliminarProductosCesta(ManagerRegistry $doctrine, $idProducto, CestaCompra $cesta): Response {
    $producto = $doctrine->getRepository(Productos::class)->find($idProducto);
    $cesta->eliminar_productos($producto);
    return $this->redirectToRoute('productos');
}

#[Route('/eliminarProductos/{idProducto}', name:'eliminarProductos')]
public function eliminarProductos(ManagerRegistry $doctrine, $idProducto): Response {
    $entityManager = $doctrine->getManager();
    $producto = $doctrine->getRepository(Productos::class)->find($idProducto);
    $entityManager->remove($producto);
    $entityManager->flush();
    return $this->redirectToRoute('adminProductos');
}
}