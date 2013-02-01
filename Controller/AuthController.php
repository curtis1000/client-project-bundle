<?php

namespace Client\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AuthController extends Controller
{
    /**
     * @Route("/", name="_auth")
     * @Template()
     */
    public function indexAction()
    {
        $facebookHelper = $this->get('nerd_facebook.helper');

        if (! $facebookHelper->userHasAuthorized())  {

            // create and pass deep link into facebook login url helper (deep link is used for post-auth redirection)
            $redirectUri = $facebookHelper->getPageTabDeepLinkUrl('_auth', '/auth', array(
                'controller' => 'AuthController',
            ));

            $loginUrl = $facebookHelper->getLoginUrlWithRedirectUri($redirectUri);

            // forward this request to the javascript redirect action
            $response = $this->forward('NerdFacebookBundle:JavascriptRedirect:index', array(
                'redirectUrl' => $loginUrl
            ));

            return $response;
        }

        // the user id will prove that the php sdk has 
        // an authenticated user session established
        return array('userId' => $facebookHelper->getUser());

    }

}
