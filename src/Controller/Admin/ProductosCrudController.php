<?php

namespace App\Controller\Admin;

use App\Entity\Productos;
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

class ProductosCrudController extends AbstractCrudController
{
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
        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('categoria'),
            TextField::new('codigo'),
            TextField::new('nombre'),
            TextField::new('descripcion'),
            NumberField::new('pvp'),
            Field::new('imageFile')->setFormType(VichImageType::class),
            NumberField::new('pp'),
            IntegerField::new('unidades'),
            TextField::new('proveedor'),
        ];
    }
   
}
