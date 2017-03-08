<?php

namespace Utilisateurs\UtilisateursBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;


class SalarieRegistrationType extends RegistrationFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        parent::buildForm($builder, $options);
        
        $builder
                ->add('nom', null, [
                    "label" => "Nom"
                ])
                
                ->add('prenom', null, [
                    "label" => "Prénom"
                ])
                
                ->add('dateNaissance', null, [
                    "label" => "Date de Naissance"
                ])
                
                ->add('telephone', null, [
                    "label" => "numero de Téléphone"
                ])
                
                 ->add('adresse', null, [
                    "label" => "Adresse"
                ])
                
                ->add('nomEntreprise', null, [
                    "label" => "Nom de l'entreprise"
                ])
        ;
        
    }
    
  public function getName ()
    {
        return 'salarie_user_registration';
    }
}
