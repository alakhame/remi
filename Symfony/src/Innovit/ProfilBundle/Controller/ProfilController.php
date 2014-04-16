<?php

namespace Innovit\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class profilController extends Controller
{
    public function indexAction($type,$id)
    {   if($type=="etudiant"){$tab=array("التقدم","اختبار المستوى","اختبار للمراجعة","الالتحاق بأستاذ","المواد و الدروس","أساتذتي","رسائل");
        return $this->render('InnovitProfilBundle:profil:profiletudiant.html.twig', array('articles' => $tab));
		}
		if($type=="prof"){   $tab=array("اختبارات","تلامذتي","طلب الإلتحاق","رسائل");
        return $this->render('InnovitProfilBundle:profil:profilprof.html.twig', array('articles' => $tab));
    }
    }
	
	public function loadAction($page)
    {   $var='InnovitProfilBundle:profil:'.$page;
        return $this->render($var);
    }
	

}
