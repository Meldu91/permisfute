<?php

namespace Permisfute\PermisfuteBundle\Controller;

use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class AdminController extends BaseAdminController
{
    public function createNewUtilisateursEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    public function prePersistUtilisateursEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
    
    public function preUpdateUtilisateursEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
}