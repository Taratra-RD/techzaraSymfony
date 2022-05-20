<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProfilController extends AbstractController
{
    /**
    * @Route("page3", name="app_page3")
    */
    public function page3(): Response
    {
        return $this->render("home/index.html.twig", [
            "controller_name" => "bonjour",
        ]);
    }

    /**
    * @Route("/page4/{name?}/{age?}", name="app_page4")
    */
    public function page4($name, $age): Response
    {
        return $this->json([
            "user" => $name,
            "age" => $age
        ]);
    }

    

}
