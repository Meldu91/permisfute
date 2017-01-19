<?php

namespace Permisfute\PermisfuteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class infoController extends Controller
{
    public function ajoutInfojAction()
    {
        return $this->render('PermisfuteBundle:Default:index.html.twig');
    }
}
