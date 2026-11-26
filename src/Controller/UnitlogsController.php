<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\InterventionRepository;
use App\Repository\UniteRepository;

final class UnitlogsController extends AbstractController
{
    #[Route('/unitlogs/{unite}', name: 'app_unitlogs', methods: ['GET'])]
    public function index(int $unite, InterventionRepository $interventionRepository, UniteRepository $uniteRepository): Response
    {
        $uniteEntity = $uniteRepository->find($unite);
        if ($uniteEntity === null) {
            throw $this->createNotFoundException('Unité introuvable.');
        }

        $interventions = $interventionRepository->findInterventionsByUnit($unite);
        return $this->render('unitlogs/index.html.twig', [
            'interventions' => $interventions,
            'unite' => $uniteEntity,
        ]);
    }


}
