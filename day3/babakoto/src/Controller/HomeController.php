<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Constant\ProfilConstant;

class HomeController extends AbstractController
{
    //change multidimensionnal arrayinto one
    private function array_flatten($array) {
        $return = array();
        foreach ($array as $value) {
            if (is_array($value)){
                $return = array_merge($return, $this->array_flatten($value));
            } else {
                $return[] = $value;
            }
        }
        return $return;
    }
    //change multidimensionnal arrayinto one

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

    #[Route('/test', name: 'app_test')]
    public function tech(): Response
    {
        $profile = ProfilConstant::MY_PROFILE;
        $array = ProfilConstant::NUMBER_TO_FLAT;
            //$profileObject = new \stdClass();
            /*foreach($profile as $key => $value)
            {
                $profileObject->{$key} = $value;
            }*/
            //$profile['parent']['pere']['nomComplet'] = $profile['parent']['pere']['nom'].' '.$profile['parent']['pere']['prenom'];
            //$profile['parent']['mere']['nomComplet'] = $profile['parent']['mere']['nom'].' '.$profile['parent']['mere']['prenom'];
        foreach($profile as $key => $value)
        {
            if($key == 'parent')
            {
                foreach($value as $key1 => $value2)
                {
                    $profile['parent'][$key1]['nomComplet'] = $value2['prenom'].' '.$value2['nom'];
                }
            }
        }

        return $this->render('home/test.html.twig', [
            'profile'=>ProfilConstant::MY_PROFILE,
            'flat' => $this->array_flatten(ProfilConstant::NUMBER_TO_FLAT)
        ]);
    }
}
