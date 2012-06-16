<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    
    public function indexAction($name, $count)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('EventBundle:Event');
        
        $event = $repo->findOneBy(array(
            'name' => 'Darth\'s suprise birthday party',
        ));
        
        return $this->render('EventBundle:Default:index.html.twig', array(
            'name' => $name,
            'count' => $count,
            'event' => $event,
        ));
    }
}
