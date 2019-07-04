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
        /*
        Here I decide to download JSON files to have the characters list complete
        If I get the JSON data from the url I only get 10 characters
        The way to get the info from a URL would be:

        Next is to avoid the SSL check, without it system won't get the info:
        $arrContextOptions=array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false,),);

        $json = file_get_contents("http://swapi.co/api/people", false, stream_context_create($arrContextOptions));
        $obj = json_decode($json);
     */

        $rootPath = $this->get('kernel')->getRootDir();

        //get the characters info from the JSON file
        $charactersFile = file_get_contents($rootPath.'/../web/swapiFiles/people.json');
        $characters = json_decode($charactersFile, true);

        //get the films info from the JSON file
        $filmsFile = file_get_contents($rootPath.'/../web/swapiFiles/films.json');
        $films = json_decode($filmsFile, true);

        foreach ($films as $film){
            $allFilmCharacters[$film['episode_id']] = $film['characters'];
        }

        //Here I get an array with the characters info inside each film
        foreach ($allFilmCharacters as $episodeID => $filmCharacters){
            foreach ($characters as $character){
                foreach ($filmCharacters as $filmCharacter){
                    if($filmCharacter == $character['url']){
                        $charactersInFilms[$episodeID][] = $character;
                    }
                }
            }
        }
        return $this->render('default/index.html.twig',array( 'charactersInFilms' => $charactersInFilms));
    }
}
