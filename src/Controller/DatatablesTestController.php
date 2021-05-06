<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DatatablesTestController extends AbstractController
{
    /**
     * @Route("/dbtest", name="datatables_test")
     */
    public function index(): Response
    {
        return $this->render('datatables_test/index.html.twig', [
            'controller_name' => 'DatatablesTestController',
        ]);
    }
}
