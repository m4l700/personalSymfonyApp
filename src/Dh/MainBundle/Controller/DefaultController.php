<?php

namespace Dh\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Dh\BlogBundle\Entity\BlogPost;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$repositoryPost = $this->getDoctrine()
    		->getRepository('DhBlogBundle:BlogPost');
    	$post = $repositoryPost->findByCategory('homepage');

    	$repositoryImage = $this->getDoctrine()
    		->getRepository('DhBlogBundle:BlogPostImageUrl');
    	$imgUrl = $repositoryImage->findAll();

        return $this->render('DhMainBundle:Default:index.html.twig', [
        	'post' 		=> $post,
        	'imgurl' 	=> $imgUrl,
        	]);
    }

    public function contactAction()
    {
    	return $this->render('DhMainBundle:Default:contact.html.twig');
    }


}
