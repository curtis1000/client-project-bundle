<?php

namespace Client\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TabController extends Controller
{
    /**
     * @Route("/", name="_tab")
     * @Template()
     */
    public function indexAction()
    {
        $facebookHelper = $this->get('nerd_facebook.helper');
        return array();
    }

}
