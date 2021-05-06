<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RebootsequenceController extends AbstractController
{
    /**
     * @Route("/rebootsequence", name="rebootsequence")
     */
    public function index(): Response
    {

        $rebootsequence_en = ["longing", "rusted", "seventeen", "daybreak", "furnace", "nine", "benign","homecoming","one",  "freight car"];
        $rebootsequence_ru = ["Желание", "Ржавый", "Семнадцать", "Рассвет", "Печь", "Девять", "Добросердечный", "Возвращение на Родину", "Один", "Товарный вагон"];

        return $this->render('rebootsequence/index.html.twig', [
            'controller_name' => 'RebootsequenceController',
  
            'rebootsequence_en' => $rebootsequence_en,
            'rebootsequence_ru' => $rebootsequence_ru,
            'mission' => '/mission/',

        ]);
    
    }


}
