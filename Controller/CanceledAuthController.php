<?php

namespace Client\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CanceledAuthController extends Controller
{
    /**
     * @Route("/", name="_canceled_auth")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

}
