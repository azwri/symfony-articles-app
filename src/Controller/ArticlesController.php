<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticlesController extends AbstractController{

    /**
     * @Route("/", name="articles_index", methods={"GET"}) 
     */
    public function index() {
        $articles = [
            "Hello World",
            "Symfony FrameWork",
            "PHP is the king"
        ];
        return $this->render("articles/index.html.twig", 
                                ["articles" => $articles]);
    }
}


