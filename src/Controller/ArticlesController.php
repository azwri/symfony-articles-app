<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


class ArticlesController {
    
    public function index() {
        $name = "Abdulrahman";
        return new Response("Hello $name");
    }
}


