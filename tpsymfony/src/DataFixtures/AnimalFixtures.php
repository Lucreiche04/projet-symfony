<?php

namespace App\DataFixtures;
use App\Entity\Animal;
use App\Entity\Famille;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $f1 = new Famille();
         $f1->setLibelle("mammifères")
         ->setDescription("Animaux Vertebrés nourrissants leur petits avec du mait.....");
         $manager->persist($f1);
         
         $f2 = new Famille();
         $f2->setLibelle("repectiles")
         ->setDescription("Animaux Vertebrés qui rempent.....");
         $manager->persist($f2);

         $f3 = new Famille();
         $f3->setLibelle("Requin")
         ->setDescription("Animaux Vertebrés très dangereux.....");
         $manager->persist($f3);

         $a1 = new Animal();
         $a1->setNom("Chien")
         ->setDescription("Un animal de compagnie.....")
         ->setImage("chien.png")
         ->setPoids(300)
         ->setDangereux(false)
         ->setFamille($f1);
         $manager->persist($a1);
        
        $a2 = new Animal();
         $a2->setNom("Serpent")
         ->setDescription("Un animal dangereux.....")
         ->setImage("serpent.png")
         ->setPoids(3)
         ->setDangereux(false)
         ->setFamille($f2);
         $manager->persist($a2);


        $a3 = new Animal();
         $a3->setNom("Cochon")
         ->setDescription("Un animal àcuisine.....")
         ->setImage("cochon.php")
         ->setPoids(100)
         ->setDangereux(true)
         ->setFamille($f1);
         $manager->persist($a3);

        $a4 = new Animal();
         $a4->setNom("Croco")
         ->setDescription("Un animal dangereux1.....")
         ->setImage("croco.pnp")
         ->setPoids(320)
         ->setDangereux(true)
         ->setFamille($f3);
         $manager->persist($a4);

        $a5 = new Animal();
         $a5->setNom("Requin")
         ->setDescription("Un animal dangereux.....")
         ->setImage("requin.png")
         ->setPoids(20)
         ->setDangereux(false)
         ->setFamille($f3);
        $manager->persist($a5);

        $manager->flush();
    }
}
