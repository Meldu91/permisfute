<?php

namespace Permisfute\PermisfuteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TarifsController extends Controller
{
    public function tarifsAction()
    {
        return $this->render('PermisfuteBundle:Default:tarifs.html.twig');
    }
}
