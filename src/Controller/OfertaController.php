<?php

namespace App\Controller;

use App\Entity\Empresa;
use App\Entity\Oferta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OfertaController extends AbstractController
{
    /**
     * @Route("/oferta", name="oferta")
     */
    public function index()
    {
        $ofertas = $this->getDoctrine()
        ->getRepository(Oferta::class)
        ->findAll();

        return $this->render('oferta/index.html.twig', [
            'ofertas' => $ofertas,
        ]);
    }

    /**
     * @Route("/{id}", name="detalls")
     */
    public function detalleOferta(int $id)
    {
        //Oferta
        $oferta = $this->getDoctrine()
        ->getRepository(Oferta::class)
        ->find($id);

        //Empresa
        $empresa = $this->getDoctrine()
        ->getRepository(Empresa::class)
        ->find($oferta->getEmpresa()->getId());


        $fecha=date_format($oferta->getDataPub(),'Y-m-d' );
        return $this->render('oferta/infoOferta.html.twig', [
            'oferta' => $oferta,
            'fecha' => $fecha,
            'empresa' => $empresa
        ]);
    }
}
