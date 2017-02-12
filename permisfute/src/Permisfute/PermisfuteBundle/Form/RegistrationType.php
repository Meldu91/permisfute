<?php

namespace Permisfute\PermisfuteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }

    // SI ON VEUT CONFIGURER LE FORMULAIRE COMME ON VEUT ON ENLEVE LE "getparent" POUR AJOUTER LES CHAMPS ET LUI DIRE QUE L'ON NE VEUT PAS HERITE DE LA CLASSE DE FOS
    //SI ON CHOISIT DE CONFIGURER UN FORMULAIRE COMME ON VEUT IL FAUT LE DECLARER EN TANT QUE SERVICE DANS LE FICHIER CONFIG ( VOIR DOC )
    
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
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