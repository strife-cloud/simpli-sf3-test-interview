<?php

// src/Danny/WorkBundle/Controller/WorkController.php

namespace Danny\WorkBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkController extends Controller
{
  public function indexAction()
  {
  	$compute_table = $this->container->get('danny_work.computetable');
  	$table = $compute_table->compute();
  	$size_tab = $compute_table->getWidth();

    return $this->render('DannyWorkBundle:Work:index.html.twig', array(
       'table' => $table,
       'size_tab' => $size_tab));
  }
}