<?php

namespace App\DataFixtures;

use App\Entity\Option;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class OptionFixtures extends Fixture
{
   

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $option = new Option();
        $option->setName('Adapté PMR');
        $manager->persist($option);

        $option = new Option();
        $option->setName('Ascenseur');
        $manager->persist($option);

        $option = new Option();
        $option->setName('Balcon');
        $manager->persist($option);

        $manager->flush();
    }
}
