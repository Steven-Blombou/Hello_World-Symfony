<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloSimplonController extends AbstractController
{
    /**
     * @Route("/hello_simplon", name="hello_simplon")
     */
    public function index()
    {
        return $this->render('hello_simplon/index.html.twig', [
            'controller_name' => 'stevenleloser',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('hello_simplon/home.html.twig');
    }
}
