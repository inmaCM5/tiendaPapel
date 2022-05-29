<?php

namespace App\Controller\Admin;

use App\Entity\Categoria;
use App\Entity\Pedido;
use App\Entity\Productos;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ProductosCrudController::class)->generateUrl());

        //return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Impresiòna')
            ->setFaviconPath('imagenes/logo.png');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Volver a index', 'fa fa-home', 'index'),
            MenuItem::linkToCrud('Categorias', 'fa fa-tags', Categoria::class),
            MenuItem::linkToCrud('Productos', 'fa fa-tags', Productos::class),
            MenuItem::linkToCrud('Pedidos', 'fa fa-tags', Pedido::class)
        ];/* 
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'index'); */
    }
}
