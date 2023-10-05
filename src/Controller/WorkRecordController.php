<?php

namespace App\Controller;

use App\Form\WorkRecordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WorkRecordController extends AbstractController
{

    /**
     * @Route("/new-record", name="new-record")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(WorkRecordType::class);

        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $workRecord = $form->getData();
            $workRecord->setUser($this->getUser());
            $entityManager->persist($workRecord);
            $entityManager->flush();

            return $this->redirectToRoute('overview', ['id' => $workRecord->getId()]);
        }

        return $this->render('work-record.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
