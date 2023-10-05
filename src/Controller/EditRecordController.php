<?php

namespace App\Controller;

use App\Form\WorkRecordType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\WorkRecord;
use App\Entity\User;
use App\Repository\WorkRecordRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EditRecordController extends AbstractController
{

    /**
     * @Route("/edit-record/{id}", name="edit-record")
     * @Route("/new-record", name="new-record")
     */
    public function edit(
        ?int $id,
        Request $request,
        WorkRecordRepository $workRecordRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if ($id === null) {
            $form = $this->createForm(WorkRecordType::class);
            $workRecord = new WorkRecord();
            $workRecord->setUser($this->getUser());
        } else {
            $workRecord = $workRecordRepository->find($id);
            if (!$workRecord) {
                throw new NotFoundHttpException("Record not found");
            }
            if (!$workRecord->isEditableBy($this->getUser())) {
                throw new UnauthorizedHttpException("Access denied");
            }
        }

        $form = $this->createForm(WorkRecordType::class, $workRecord);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $workRecord = $form->getData();
            $entityManager->persist($workRecord);
            $entityManager->flush();

            return $this->redirectToRoute('success');
        }

        return $this->render('edit-record.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
