<?php

namespace Permisfute\PermisfuteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionController extends Controller
{
    public function inscriptionAction()
    {
        return $this->render('PermisfuteBundle:Default:inscription.html.twig');
    }
}
