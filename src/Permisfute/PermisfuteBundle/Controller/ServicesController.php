<?php

namespace Permisfute\PermisfuteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServicesController extends Controller
{
    public function servicesAction()
    {
        return $this->render('PermisfuteBundle:Default:services.html.twig');
    }
}
