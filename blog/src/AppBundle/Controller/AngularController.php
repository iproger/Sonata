<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AngularController extends Controller
{

    /**
     * @Route("/angular")
     */
    public function indexAction()
    {

        return $this->render('AppBundle:Angular:index.html.twig', array(
                // ...
        ));
    }

}
