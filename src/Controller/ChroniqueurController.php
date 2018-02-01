<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ChroniqueurController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {	

    	$bim = 'Bim';
    	 $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
					];

    	  return $this->render('Chroniqueur.html.twig', [
    	  		'comments' => $comments,
    	  		'bim' => $bim,

			]);
       
    }
}
