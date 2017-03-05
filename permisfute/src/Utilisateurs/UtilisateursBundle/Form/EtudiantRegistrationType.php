<?php

namespace Utilisateurs\UtilisateursBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class EtudiantRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
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
                
                ->add('nomFormation', null, [
                    "label" => "Nom de la formations"
                ])
                              
                ->add('nomEtablissement', null, [
                    "label" => "Nom de l'établissement"
                ])
        ;
        
    }
 
    public function getParent()
    {
        return 'fos_user_registration';
    }
    
    public function getName ()
    {
        return 'etudiant_user_registration';
    }
}
