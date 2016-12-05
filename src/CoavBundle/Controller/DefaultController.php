<?php

namespace CoavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoavBundle:Default:index.html.twig');
    }
}
