<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $c1 = new Famille();
        $c1->setLibelle("mamimfère")
            ->setDescription("Animaux vertébrés nourissant leurs petits avec du lait");
        $manager->persist($c1);

        $c2 = new Famille();
        $c2->setLibelle("reptile")
            ->setDescription("Animaux vertébrés nourissant qui rampent");
        $manager->persist($c2);
        
        $c3 = new Famille();
        $c3->setLibelle("poissons")
            ->setDescription("Animaux invertébrés du monde aquatique");
        $manager->persist($c3);

        $a1 = new Animal();
        $a1->setNom('Chien')
            ->setDescription('Un animal domestique')
            ->setImage('chien.png')
            ->setPoid(12)
            ->setDangereux(false)
            ->setFamille($c1);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Cochon')
            ->setDescription('Un animal d\'élévage')
            ->setImage('cochon.png')
            ->setPoid(30)
            ->setDangereux(false)
            ->setFamille($c1);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Serpent')
            ->setDescription('Un animal dangereux')
            ->setImage('serpent.png')
            ->setPoid(3)
            ->setDangereux(true)
            ->setFamille($c2);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('Crocodile')
            ->setDescription('Un animal trés dangereux')
            ->setImage('crocodile.png')
            ->setPoid(110)
            ->setDangereux(true)
            ->setFamille($c2);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Requin')
            ->setDescription('Un animal marin trés dangereux')
            ->setImage('requin.png')
            ->setPoid(150)
            ->setDangereux(true)
            ->setFamille($c3);
        $manager->persist($a5);

        $manager->flush();
    }
}
