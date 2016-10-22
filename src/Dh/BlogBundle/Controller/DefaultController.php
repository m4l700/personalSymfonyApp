<?php

namespace Dh\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DhBlogBundle:Default:index.html.twig');
    }
}
