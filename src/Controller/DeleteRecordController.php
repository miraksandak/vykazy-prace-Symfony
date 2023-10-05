<?php

namespace App\Controller;

use App\Entity\WorkRecord;
use App\Repository\WorkRecordRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class DeleteRecordController extends AbstractController
{

    /**
     * @Route("/delete-record/{id}", name="delete-record")
     */
    public function delete(
        $id,
        EntityManagerInterface $entityManager,
        WorkRecordRepository $workRecordRepository
    ): Response {
        $workRecord = $workRecordRepository->find($id);
    
        if (!$workRecord) {
            throw $this->createNotFoundException(
                'No record found for id ' . $id
            );
        }
    
        $entityManager->remove($workRecord);
        $entityManager->flush();
    
        return $this->redirectToRoute('overview');
    }
}
