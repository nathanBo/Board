<?php

namespace Board\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BoardTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
