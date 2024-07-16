<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController
{
    #[Route('/article', name: 'article_index')]
    public function index(): Response
    {
        return new Response('vue article');
    }
}
