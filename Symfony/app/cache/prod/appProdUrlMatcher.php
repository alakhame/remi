<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/profil')) {
            // innovit_profil_etudiant
            if (preg_match('#^/profil/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'innovit_profil_etudiant')), array (  '_controller' => 'Innovit\\ProfilBundle\\Controller\\ProfilController::indexAction',));
            }

            // innovit_profil_load
            if (0 === strpos($pathinfo, '/profil/special') && preg_match('#^/profil/special/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'innovit_profil_load')), array (  '_controller' => 'Innovit\\ProfilBundle\\Controller\\ProfilController::loadAction',));
            }

        }

        // innovit_cours_load
        if (0 === strpos($pathinfo, '/cours') && preg_match('#^/cours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'innovit_cours_load')), array (  '_controller' => 'Innovit\\ProfilBundle\\Controller\\MenuController::coursByIdAction',));
        }

        // sendNew
        if ($pathinfo === '/sendNew') {
            return array (  '_controller' => 'Innovit\\ProfilBundle\\Controller\\MessageController::sendNewAction',  '_route' => 'sendNew',);
        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'InnovitProfilBundle:Test:bla',  '_route' => 'test',);
        }

        // innovit_general_homepage
        if (0 === strpos($pathinfo, '/general') && preg_match('#^/general/(?P<name>qsnous|flashactus|Accueil|liensutiles)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'innovit_general_homepage')), array (  '_controller' => 'Innovit\\GeneralBundle\\Controller\\GeneralController::indexAction',));
        }

        // HelloTheWorld
        if ($pathinfo === '/blog/hello-world') {
            return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'HelloTheWorld',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
