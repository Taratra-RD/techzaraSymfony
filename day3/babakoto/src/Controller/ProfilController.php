<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProfilController extends AbstractController
{
    const ETUDIANT = 
    [
        "nom" =>"RAND",
        "prenom" => "taratra",
        "date_de_naissance" => "12/12/2002",
        "parent" =>
            [
                "pere"=>
                [
                    "nom"=>"RAND",
                    "prenom"=>"Toutoune"
                ],
                "mere"=>
                [
                    "nom"=>"RAND",
                    "prenom"=>"tatane"
                ]
            ],
            "etude"=>
            [
                [
                    "etablissement"=>"CNTEMAD",
                    "diplome"=>"License"
                ],
            ],
            "experience"=>
            [
                [
                    "societe"=>"Techzara",
                    "poste"=>"noob"
                ]
            ]
    ];
    
    public function toHtml($p)
    {
        foreach($p as $key1=>$profile)
        {
            if(gettype($profile)!= "array")
            {
                $key1 = ["k"=>$key1, "p"=>$profile];
            }
            else
            {
                foreach($profile as $key2=>$profile1)
                {
                    if(gettype($profile1) != "array")
                    {
                        $key2 = ["k"=>$key2, "p"=>$profile1];
                    }
                    else
                    {
                        foreach($profile1 as $key3=>$profile2)
                        {
                            return $key3 = ["k"=>$key3, "p"=>$profile2];
                        }
                    }
                }
            }
        }
    }

    /**
    * @Route("page3", name="app_page3")
    */
    public function page3(): Response
    {
        return $this->render("home/index.html.twig", [
            "controller_name" => "bonjour",
            'profile'=> self::ETUDIANT,
            'html' => toHtml()
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
