<?php
// src/AppBundle/Form/RegistrationType.php

namespace Utilisateurs\UtilisateursBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileMoniteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}