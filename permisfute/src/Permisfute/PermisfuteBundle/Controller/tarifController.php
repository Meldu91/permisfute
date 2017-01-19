<?php

namespace Permisfute\PermisfuteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class tarifController extends Controller
{
    public function indexAction()
    {
        return $this->render('PermisfuteBundle:Default:index.html.twig');
    }
}
