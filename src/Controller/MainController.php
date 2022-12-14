<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/personnages", name="characters")
     */
    public function characters(){
        return $this->render('characters.html.twig');
    }
}
