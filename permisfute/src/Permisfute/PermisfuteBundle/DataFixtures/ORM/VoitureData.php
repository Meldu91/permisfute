<?php

namespace Permisfute\PermisfuteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Permisfute\PermisfuteBundle\Entity\Voiture;

class VoitureData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $voiture = new Voiture();
        $voiture->setConsommationV('12,5');
        $voiture->setImmatriculationV('ZEFV25G');
        
        $manager->persist($voiture);
        $manager->flush();
    }
}