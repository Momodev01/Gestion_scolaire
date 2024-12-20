<?php

namespace App\DataFixtures;

use App\Entity\Classe;
use App\Entity\Etudiant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClasseFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data = ["L1DWM", "L2DWM", "L1GL", "L2GL"];
        foreach ($data as $value) {
            $classe = new Classe();
            $classe->setNom($value);
            $manager->persist($classe);

            $nbreEtudiants = rand(5, 10);
            
            for ($i=1; $i <= $nbreEtudiants; $i++) {
                $etudiant = new Etudiant();
                $etudiant-> setMatricule("Mat000".$i);
                $etudiant-> setNomComplet("Mon nom".$i);
                $etudiant->setLogin("login".$i."@gmail.com");
                $etudiant->setPassword("passer".$i);

                $classe->addEtudiant($etudiant);
            }

            $manager->persist($classe);
        }

        $manager->flush();
    }
}
