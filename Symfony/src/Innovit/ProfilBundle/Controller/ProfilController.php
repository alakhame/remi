<?php

namespace Innovit\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;

class profilController extends Controller
{
	
    public function indexAction($name)
    {   
		$user = $this->container->get('security.context')->getToken()->getUser();
		if($name=="etudiant"){$tab=array("التقدم","اختبار المستوى","اختبار للمراجعة","الالتحاق بأستاذ","المواد و الدروس","أساتذتي","رسائل");
        return $this->render('InnovitProfilBundle:profil:profiletudiant.html.twig', array('articles' => $tab, 'user'=>$user));
		}
		if($name=="prof"){   $tab=array("اختبارات","تلامذتي","طلب الإلتحاق","رسائل");
        return $this->render('InnovitProfilBundle:profil:profilprof.html.twig', array('articles' => $tab));
    }
    }
	
	public function loadAction($page)
    {   $var='InnovitProfilBundle:profil:'.$page;
        return $this->render($var);
    }
	

}
