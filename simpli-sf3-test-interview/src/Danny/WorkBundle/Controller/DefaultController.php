<?php

namespace Danny\WorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DannyWorkBundle:Default:index.html.twig');
    }
}
