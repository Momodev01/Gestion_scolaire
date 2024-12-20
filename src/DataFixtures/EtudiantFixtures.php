<?php

namespace App\DataFixtures;

use App\Entity\Etudiant;
use App\Repository\ClasseRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EtudiantFixtures extends Fixture
{
    // Injection de Dépendances ClasseRepository
    public function __construct(private ClasseRepository $classeRepository) {
        # code ...
    }
    public function load(ObjectManager $manager): void
    {
        $classes = $this->classeRepository->findAll();

        foreach ($classes as $classe) {
            $nbreEtudiants = rand(5, 10);

            for ($i=1; $i <= $nbreEtudiants; $i++) {
                $etudiant = new Etudiant();
                $etudiant
                    -> setMatricule("Mat000".$i)
                    -> setNomComplet("Mon nom".$i)
                    ->setLogin("login".$i."@gmail.com")
                    ->setPassword("passer".$i)
                    ->setClasse($classe);
                $manager->persist($etudiant);
            }
        }

        $manager->flush();
    }
}
