<?php

namespace App\Controller;

use App\Entity\AgencesRoad;
use App\Form\AgencesRoadType;
use App\Repository\AgencesRoadRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/agences/road')]
class AgencesRoadController extends AbstractController
{
    #[Route('/', name: 'app_agences_road_index', methods: ['GET'])]
    public function index(AgencesRoadRepository $agencesRoadRepository): Response
    {
        return $this->render('agences_road/index.html.twig', [
            'agences_roads' => $agencesRoadRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_agences_road_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $agencesRoad = new AgencesRoad();
        $form = $this->createForm(AgencesRoadType::class, $agencesRoad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($agencesRoad);
            $entityManager->flush();

            return $this->redirectToRoute('app_agences_road_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('agences_road/new.html.twig', [
            'agences_road' => $agencesRoad,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_agences_road_show', methods: ['GET'])]
    public function show(AgencesRoad $agencesRoad): Response
    {
        return $this->render('agences_road/show.html.twig', [
            'agences_road' => $agencesRoad,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_agences_road_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AgencesRoad $agencesRoad, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AgencesRoadType::class, $agencesRoad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_agences_road_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('agences_road/edit.html.twig', [
            'agences_road' => $agencesRoad,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_agences_road_delete', methods: ['POST'])]
    public function delete(Request $request, AgencesRoad $agencesRoad, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$agencesRoad->getId(), $request->request->get('_token'))) {
            $entityManager->remove($agencesRoad);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_agences_road_index', [], Response::HTTP_SEE_OTHER);
    }
}
