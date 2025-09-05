<?php

namespace App\Controller;
use App\Entity\Animal;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    #[Route('/', name: 'animaux')]
    public function index(EntityManagerInterface $em): Response
    {
        $repository = $em->getRepository(Animal::class);
        $animaux = $repository->findAll();
        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animaux' => $animaux
        ]);
}

    #[Route('/animal/{id} ', name: 'afficher_animal')]
    public function afficherAnimal(Animal $animal): Response
    {
            return $this->render('animal/detail_animal.html.twig', [
            'animal' => $animal ]);
    }
//     public function afficherAnimal(EntityManagerInterface $em,$id): Response
// {
//         //dd($caracteristiques->carac);
//         $repository = $em->getRepository(Animal::class);
//         $animal = $repository->find($id);

//         return $this->render('animal/detail_animal.html.twig', [
//         'animal' => $animal ]);
//     }
}
