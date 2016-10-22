<?php

namespace Dh\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DhMainBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
    	return $this->render('DhMainBundle:Default:contact.html.twig');
    }


}
