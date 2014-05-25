<?php

namespace website\CiolacuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($myaction = 'Home')
    {
        return $this->render('websiteCiolacuBundle:Default:index.html.twig', array('myaction' => $myaction));
    }
}
