<?php

namespace Innovit\GeneralBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralController extends Controller
{
    public function indexAction($name)
    {
       if($name=="Accueil") return $this->render('InnovitGeneralBundle:General:accueil.html.twig', array('name' => $name));
	   if($name=="qsnous") return $this->render('InnovitGeneralBundle:General:qsnous.html.twig', array('name' => $name));
	   if($name=="flashactus") return $this->render('InnovitGeneralBundle:General:flashactualites.html.twig', array('name' => $name));
	   if($name=="liensutiles") return $this->render('InnovitGeneralBundle:General:liensutiles.html.twig', array('name' => $name));
    } 
	

}
