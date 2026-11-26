<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\InterventionRepository;

final class UnitlogsController extends AbstractController
{
    #[Route('/unitlogs/{unite}', name: 'app_unitlogs', methods: ['GET'])]
    public function index(int $unite, InterventionRepository $interventionRepository): Response
    {
        $interventions = $interventionRepository->findInterventionsByUnit($unite);
        return $this->render('unitlogs/index.html.twig', [
            'interventions' => $interventions,
        ]);
    }


}
