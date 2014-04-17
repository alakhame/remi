<?php

namespace Innovit\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralController extends Controller
{
    public function indexAction($name)
    {  if($this->container->get('security.context')->getToken()->getUser())
	   $type="logout";
	   else
	   $type=" تسجيل الدخول";
       if($name=="Accueil") return $this->render('InnovitGeneralBundle:General:accueil.html.twig', array('name' => $name,'type'=>$type));
	   if($name=="qsnous") return $this->render('InnovitGeneralBundle:General:qsnous.html.twig', array('name' => $name));
	   if($name=="flashactus") return $this->render('InnovitGeneralBundle:General:flashactualites.html.twig', array('name' => $name));
	   if($name=="liensutiles") return $this->render('InnovitGeneralBundle:General:liensutiles.html.twig', array('name' => $name));
	   if($name=="login") return $this->render('InnovitGeneralBundle:General:login.html.twig', array('name' => $name));
	  
    }
	public function redirectionAction()
	{
	 $user = $this->container->get('security.context')->getToken()->getUser();
	 $type=$user->getType();
	 $id=$user->getId();
	 return $this->redirect($this->generateUrl('innovit_profil',array('type'=>$type,'id'=>$id)));
	
	}
	
}
