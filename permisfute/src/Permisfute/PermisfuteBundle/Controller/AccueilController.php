<?php

namespace Permisfute\PermisfuteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function accueilAction()
    {
        return $this->render('PermisfuteBundle:Default:index.html.twig');
    }
}
