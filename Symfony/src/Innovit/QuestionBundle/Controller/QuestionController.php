<?php

namespace Innovit\QuestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use	Innovit\ProfilBundle\Entity\Utilisateur;
use	Innovit\ProfilBundle\Entity\Enseignant;
use	Innovit\ProfilBundle\Entity\Question;

use Symfony\Component\HttpFoundation\Response;

class QuestionController extends Controller
{
    public function pickAction()
    {	 
		$doctrine = $this->getDoctrine();
		$q=$doctrine->getRepository('InnovitProfilBundle:Question')->findBy(array('idCours'=>'4')); 
		//$response = new Response($q->getRep());
	//return $response;
		//$response->headers->set('Content-Type', 'text/xml');
		$qs[]=$q;
		return $this->render('InnovitQuestionBundle:Question:pick.html.twig', array(  'qs' => $q) ); 

	}
}
