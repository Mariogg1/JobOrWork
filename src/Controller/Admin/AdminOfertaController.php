<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminOfertaController extends AbstractController
{
    /**
     * @Route("/admin/admin/oferta", name="admin_admin_oferta")
     */
    public function index()
    {
        return $this->render('admin/admin_oferta/index.html.twig', [
            'controller_name' => 'AdminOfertaController',
        ]);
    }
}
