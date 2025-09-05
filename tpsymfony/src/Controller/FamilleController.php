<?php

namespace App\Controller;
use App\Entity\Famille;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class FamilleController extends AbstractController
{
    #[Route('/famille', name: 'familles')]
    public function index(EntityManagerInterface $em): Response
    {
        $repository = $em->getRepository(Famille::class);
        $familles = $repository->findAll();
        return $this->render('famille/familles.html.twig', [
            'controller_name' => 'FamilleController',
            'familles' => $familles
        ]);
}
    // public function index(): Response
    // {
    //     return $this->render('famille/familles.html.twig', [
    //         'controller_name' => 'FamilleController',
    //     ]);
    // }
}
