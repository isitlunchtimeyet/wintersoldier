<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MissionController extends AbstractController
{
    /**
     * @Route("/mission", name="mission")
     */
    public function index(): Response
    {
        $data=array(
            array(
                'target'=>'/img/fury.jpeg',
                'name'=>'Mc Furry',
                'age'=>'54',
                'location'=>'California',
                'detail'=>'Is a badass motherfucker!',
                'deadline'=>"22-11-10",
                'status'=>'Expired',
                ),
                array(
                'target'=>'/img/stark.jpeg',
                'name'=>'Pony Stark',
                'age'=>'43',
                'location'=>'New York',
                'detail'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.',
                'deadline'=>"10-10-10",
                'status'=>'Expired',
                ),
                array(
                'target'=>'/img/window.jpg',
                'name'=>'Black window',
                'age'=>'24',
                'location'=>'Russia, Moscow',
                'detail'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.',
                'deadline'=>"10-10-10",
                'status'=>'Expired',
                ),
                array(
                'target'=>'/img/bruce.jpg',
                'name'=>'Bruce Spanner',
                'age'=>'45',
                'location'=>'India, New delhi',
                'detail'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.',
                'deadline'=>"2019-09-10",
                'status'=>'Expired',
                ),
                array(
                'target'=>'/img/parker.jpeg',
                'name'=>'Pitin Parker',
                'age'=>'54',
                'location'=>'New York',
                'detail'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.',
                'deadline'=>"2020-10-10",
                'status'=>'Expired',
                ),
                array(
                'target'=>'/img/josian.jpeg',
                'name'=>'Josian',
                'age'=>'24',
                'location'=>'Trou Deau Douce, Mauritius',
                'detail'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.',
                'deadline'=> '2021-10-10',
                'status'=>'Expired',
                ),
                    
            );





        $wintersoldiername='Chittesh Sham';
        $wintersoldierage=date('Y')-1996;
        $wintersoldierlocation='Mauritius';
        $wintersoldierkills='142';
        return $this->render('mission/index.html.twig', [
            'controller_name' => 'MissionController',
            'target'=>$data,
            
            'wintersoldiername'=>$wintersoldiername,
            'wintersoldierage'=>$wintersoldierage,
            'wintersoldierlocation'=>$wintersoldierlocation,
            'wintersoldierkills'=>$wintersoldierkills,

        ]);
    }
}