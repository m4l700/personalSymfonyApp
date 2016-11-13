<?php

namespace Dh\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Dh\BlogBundle\Entity\BlogPost;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$post = $this->getDoctrine()
    		->getRepository('DhBlogBundle:BlogPostEntity')->findByCategory('homepage');

    	$imgUrl = $this->getDoctrine()
    		->getRepository('DhBlogBundle:BlogPostImageUrl')->findAll();

    	$aboutEnt = $this->getDoctrine()
    		->getRepository('DhMainBundle:About')->findAll();

    	//$flash = $this->addFlash('notice', 'Navigate with the menu on the left side');

        return $this->render('DhMainBundle:Default:index.html.twig', [
        	'post' 		=> $post,
        	'imgurl' 	=> $imgUrl,
        	'about'		=> $aboutEnt,
        	]);
    }

    public function contactAction()
    {
    	return $this->render('DhMainBundle:Default:contact.html.twig');
    }


}
