<?php

namespace Vibs\EvesymBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VibsEvesymBundle:Default:index.html.twig');
    }
}
