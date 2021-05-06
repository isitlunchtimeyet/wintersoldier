<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WinterSoldierController extends AbstractController
{
    /**
     * @Route("/wintersoldier", name="winter_soldier")
     */
    public function index(): Response
    {
        return $this->render("winter_soldier/index.html.twig", [
            'controller_name' => 'WinterSoldierController',
            'page_title' => 'Winter Soldier Programme',
            'rebootinit' => '/rebootsequence/'
        ]);
    
    

    }
}
