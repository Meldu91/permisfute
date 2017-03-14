<?php

namespace Permisfute\PermisfuteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class UtilisateursData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new Utilisateurs();
        $user->setNom('legwer');
        $user->setPrenom('titi');
        $user->setDateNaissance('2017-03-15');
        $user->setTelephone('0101010101');
        $user->setAdresse('2 rue des depsos');
       
        $manager->persist($user);
        $manager->flush();
    }
}