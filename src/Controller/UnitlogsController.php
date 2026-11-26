<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UnitlogsController extends AbstractController
{
    #[Route('/unitlogs', name: 'app_unitlogs')]
    public function index(): Response
    {
        return $this->render('unitlogs/index.html.twig', [
            'controller_name' => 'UnitlogsController',
        ]);
    }
}
