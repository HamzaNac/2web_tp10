<?php

namespace PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/posts/{firstname}/{lastname}")
     */
    public function indexAction($firstname,$lastname)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('PostBundle:Post')->findAll();

        return $this->render('PostBundle:Default:index.html.twig',array
        (
        'posts'=>$posts,
        'firstname'=>$firstname,
        'lastname'=>$lastname

        ));
    }
}
