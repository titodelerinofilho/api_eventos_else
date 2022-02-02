<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Eventos;


    /**
     * @Route("/eventos", name="eventos_")
     */

class EventosController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $doc = $doctrine->getManager();
        $eventos = $doc->getRepository(Eventos::class)->findAll();

        return $this->json([
            'data' => $eventos
        ]);
    }
    /**
     * @Route("/{$EventoId}", name="showOnly", methods={"GET"})
     */
    public function showOnly(ManagerRegistry $doctrine, $EventoId)
    {
        $doc = $doctrine->getManager();
        $eventos = $doc->getRepository(Eventos::class)->find($EventoId);

        return $this->json([
            'data' => $eventos
        ]);
    }
    /**
     * @Route("/", name="create", methods={"POST"})
     */
    public function create(ManagerRegistry $doctrine, Request $request) 
    {
        $data = $request->request->all();
        $doc = $doctrine->getManager();

        $eventos = new Eventos();

        $eventos->setTitle($data['title']);
        $eventos->setDateStart(new \DateTime('now', new \DateTimezone('America/Sao_Paulo')));
        $eventos->setDateEnd(new \DateTime('now', new \DateTimezone('America/Sao_Paulo')));
        $eventos->setDescription($data['description']);
        $eventos->setStatus($data['status']);
        $eventos->setCreatedAt(new \DateTime('now', new \DateTimezone('America/Sao_Paulo')));
        $eventos->setUpdatedAt(new \DateTime('now', new \DateTimezone('America/Sao_Paulo')));

        $doc->persist($eventos);
        $doc->flush();

        return $this->json([
            'data' => 'Evento Criado com Sucesso!'
        ]);
    }

    /**
     * @Route("/{$EventoId}", name="update", methods={"PUT,PATCH"})
     */
     public function update() 
     {

     }

     /**
     * @Route("/{$EventoId}", name="delete", methods={"DELETE"})
     */
    public function delete() 
    {

    }
}
