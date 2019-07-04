<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FilmsController extends Controller
{
    /**
     * @Route("/filmsJSON", name="filmsJSON")
     */
    public function filmsJSONAction(Request $request)
    {

        //get the films info for the search table
        $rootPath = $this->get('kernel')->getRootDir();
        $str = file_get_contents($rootPath.'/../web/swapiFiles/films.json');
        $films = json_decode($str, true);

        return new JsonResponse($films);
    }

    /**
     * @Route("/filmInfo", name="filmInfo")
     */
    public function filmInfoAction(Request $request)
    {
        //we prepare the film info with the episodeId after user clicks
        $episodeID = $request->get('episodeID');

        $rootPath = $this->get('kernel')->getRootDir();
        $str = file_get_contents($rootPath.'/../web/swapiFiles/films.json');
        $films = json_decode($str, true);
        $filmToShow = [];

        $this->get('session')->getFlashBag()->add('notice', 'Page visited of the Episode ID: '.$episodeID);

        foreach ($films as $film) {
            if($film['episode_id'] == $episodeID){$filmToShow = $film;}
        }

        return $this->render('swapi/filmInfo.html.twig', array('filmToShow' => $filmToShow));
    }
}
