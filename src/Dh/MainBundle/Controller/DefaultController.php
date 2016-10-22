<?php

namespace Dh\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dh\BlogBundle\Entity\BlogPost;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$repository = $this->getDoctrine()
    		->getRepository('DhBlogBundle:BlogPost');
    	$post = $repository->findByCategory('homepage');

        return $this->render('DhMainBundle:Default:index.html.twig', [
        	'post' => $post,
        	]);
    }

    public function contactAction()
    {
    	return $this->render('DhMainBundle:Default:contact.html.twig');
    }


}
