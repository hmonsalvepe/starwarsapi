<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {


        $rootPath = $this->get('kernel')->getRootDir();

        $str = file_get_contents($rootPath.'/../web/swapiFiles/films.json');
        $films = json_decode($str, true);

        $filmsfile = $rootPath.'/../web/swapiFiles/films.json';
        $charactersfile = $rootPath.'/../web/swapiFiles/people.json';

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(

        ));
    }


}
