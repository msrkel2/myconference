<?php

namespace my\conferenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('conferenceBundle:Default:index.html.twig', array('name' => $name));
    }
}
