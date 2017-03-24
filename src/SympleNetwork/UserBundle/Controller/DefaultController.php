<?php

namespace SympleNetwork\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{firstname}/{lastname}
    ")
     */
    public function indexAction($firstname, $lastname)
    {
        $name = "Hello " .ucfirst($firstname)." ".ucfirst($lastname);
        dump($name);
        return $this->render('SympleNetworkUserBundle:Default:index.html.twig',
            array
            ('name'=>$name)


        );
    }
}
