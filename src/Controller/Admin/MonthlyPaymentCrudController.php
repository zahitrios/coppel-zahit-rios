<?php

namespace App\Controller\Admin;

use App\Entity\MonthlyPayment;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MonthlyPaymentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MonthlyPayment::class;
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
