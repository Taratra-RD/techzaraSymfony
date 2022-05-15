<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        return new Response("Hello word");
    }

    /**
     * @Route("page2", name="app_page2")
     */
    public function page2(): Response
    {
        return $this->redirectToRoute("app_home");
    }
}
