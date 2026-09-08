<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

final class WelcomeController extends AbstractController
{
    #[Route('/', name: 'app_welcome')]
    public function index(TranslatorInterface $translator): Response
    {
        $appName=$translator->trans('First Steps Digital');

        $CurentDate = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
            'app_name' => $appName,
            'current_date' => $CurentDate->format('d/m/Y'),
        ]);
    }
}
