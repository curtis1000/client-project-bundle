<?php

namespace Client\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DeepLinkController extends Controller
{
    /**
     * @Route("/", name="_deep_link")
     * @Template()
     */
    public function indexAction()
    {
        $facebookHelper = $this->get('nerd_facebook.helper');

        // deep link url back to this same page
        $deepLinkUrl = $facebookHelper->getPageTabDeepLinkUrl('_deep_link', '/deep-link', array(
            'controller' => 'DeepLinkController',
        ));

        return array('deepLinkUrl' => $deepLinkUrl);
    }

}
