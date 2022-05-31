<?php

namespace App\Controller\Admin;

use App\Entity\Categoria;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CategoriaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categoria::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->update(Crud::PAGE_INDEX, Action::NEW, function(Action $action) {
            return $action->setLabel("Añadir categoría");
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

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
