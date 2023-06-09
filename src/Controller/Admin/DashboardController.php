<?php

namespace App\Controller\Admin;

use App\Entity\Role;
use App\Entity\Record;
use App\Entity\Employee;
use App\Controller\Admin\RoleCrudController;
use App\Entity\MonthlyPayment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(RecordCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Zahit Rios | Coppel')
            ->disableDarkMode();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Inicio', 'fa fa-home');
        yield MenuItem::linkToCrud('Salarios mensuales', 'fas fa-hand-holding-usd', MonthlyPayment::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Registro de entregas', 'fas fa-truck', Record::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Empleados', 'fas fa-users', Employee::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Roles', 'fas fa-tags', Role::class)->setPermission('ROLE_ADMIN');
        yield MenuItem::section('');
        yield MenuItem::linkToLogout('Cerrar sesión', 'fas fa-sign-out-alt');
    }
}
