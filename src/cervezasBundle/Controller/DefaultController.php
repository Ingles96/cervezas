<?php

namespace cervezasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="cervezas")
     */
    public function cervezasAction()
    {
        return $this->render('cervezasBundle:Default:cervezas.html.twig');
    }
}
