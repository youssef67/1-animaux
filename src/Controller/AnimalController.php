<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use App\Repository\DisposeRepository;
use App\Repository\FamilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     */
    public function index(AnimalRepository $repository)
    {
        $animaux = $repository->findAll();

        return $this->render('animal/animaux.html.twig', [
            'animaux' => $animaux
        ]);
    }

     /**
     * @Route("/animal/{id}", name="afficher_animal")
     */
    public function afficherAnimal(Animal $animal, DisposeRepository $repository)
    {  
        // $personne = $repository->findOneBy(['id' => $animal->getId()]);       
        // dd($personne);
        return $this->render('animal/afficherAnimal.html.twig', [
            'animal' => $animal
        ]);
    }
}
