<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home_index')]
    public function index(): Response
    {
        return new Response('Hello, world!');
    }

    #[Route('/hello/{name}', name: 'home_hello')]
    public function hello(Request $request)
    {
        return new Response('Bonjour' . ' ' . $request->get('name'));
    }

    #[Route('/helloAge/{age}', name: 'home_hello', requirements: ['id' => Requirement::DIGITS])]
    public function helloAge($age)
    {
        // return new Response('Bonjour, j\'ai' .' '. $request->get('age') . ' ' . 'ans.');
        return new Response("Bonjour j'ai, $age ans.");
    }

    public function list()
    {
        return new Response("je suis une route créé dans le fichier yaml");
    }

    #[Route('/template/{prenom}', name: 'home_template')]
    public function template($prenom)
    {
        $animals = ['Chat', 'Chien', 'Lapin', 'Oiseau', 'Poisson'];

        // return new Response('Bonjour, j\'ai' .' '. $request->get('age') . ' ' . 'ans.');
        return $this->render('home/index.html.twig', ['name'=> $prenom]);
    }

    
    
}
