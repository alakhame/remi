<?php

namespace Innovit\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralController extends Controller
{
	
	public function AcceuilAction()
    {
     return $this->render('InnovitGeneralBundle:General:Layoutgeneral.php.twig');
	   	  
    }
	
	public function loadAction($page)
    {   $var='InnovitGeneralBundle:General:'.$page;
        return $this->render($var);
    }
	
	public function redirectionAction()
	{
	 $user = $this->container->get('security.context')->getToken()->getUser();
	 $type=$user->getType();
	 $id=$user->getId();
	 return $this->redirect($this->generateUrl('innovit_profil',array('type'=>$type,'id'=>$id)));
	
	}
	
}
