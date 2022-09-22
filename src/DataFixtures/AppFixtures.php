<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function __construct()
    {
        $this->faker = \Faker\Factory::create('fr_FR');
    }
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i < 20; $i++) { 
            $user = new Users();
            $user->setEmail($this->faker->email);
            $user->setPassword($this->faker->password);
    
            $manager->persist($user);
        }
        

        $manager->flush();
    }
}
