<?php

namespace Utilisateurs\UtilisateursBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationMoniteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $builder
                ->add('nom', 'text', array('label' => 'Votre nom'))
                ->add('prenom', 'text', array('label' => 'Votre prenom'))
                ->add('dateNaissance', 'date', array('label' => 'Date de Naissance'))
                ->add('user', 'text', array('label' =>'Nom d\'utilisateur'))
                ->add('mdp', 'text', array('label' =>'Mot de passe'))
                ->add('email', 'email' ,array('label' => 'Votre mail'));           
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}