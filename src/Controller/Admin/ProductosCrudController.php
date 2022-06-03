<?php

namespace App\Controller\Admin;

use App\Entity\Categoria;
use App\Entity\Productos;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProductosCrudController extends AbstractCrudController
{

    public function __construct(private ManagerRegistry $doctrine) {}

    public static function getEntityFqcn(): string
    {
        return Productos::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->update(Crud::PAGE_INDEX, Action::NEW, function(Action $action) {
            return $action->setLabel("Añadir producto");
        })
        ->update(Crud::PAGE_INDEX, Action::EDIT, function(Action $action) {
            return $action->setLabel("Editar");
        })
        ->update(Crud::PAGE_INDEX, Action::DELETE, function(Action $action) {
            return $action->setLabel("Eliminar");
        })
        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function(Action $action) {
            return $action->setLabel("Guardar cambios");
        })
        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function(Action $action) {
            return $action->setLabel("Guardar y continuar editando");
        });
    }
    
    public function configureFields(string $pageName): iterable
    {
        /* $entityManager = $this->doctrine->getManager();
        
        $query = $entityManager->createQuery(
            'SELECT p
            FROM AppBundle:Categoria p
            WHERE p.parents_id = :price'
        )->setParameter('price', null);
        
        $products = $query->getResult(); */

        //$prueba = fn (QueryBuilder $queryBuilder) => $queryBuilder->getEntityManager()->getRepository(Categoria::class)->findAllParent();

        return [
            IdField::new('id')->hideOnForm(),
            /* yield AssociationField::new('categoria')->setQueryBuilder(
                fn (QueryBuilder $queryBuilder) => $queryBuilder->getEntityManager()->getRepository(Categoria::class);
                //$products
            ), */
            AssociationField::new('categoria'),
            TextField::new('codigo'),
            TextField::new('nombre'),
            TextField::new('descripcion'),
            NumberField::new('pvp'),
            Field::new('imageFile')->setFormType(VichImageType::class)->setLabel('Imagen'),
            NumberField::new('pp'),
            IntegerField::new('unidades'),
            TextField::new('proveedor'),
        ];
    }
   
}
