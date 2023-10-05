<?php

namespace App\Controller;

use App\Form\WorkRecordType;
use App\Annotations\AuthorizationRequirements;
use App\Annotations\ResponseType;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class MainController extends AbstractController
{
    private $databaseUrl;

    public function __construct(string $databaseUrl)
    {
        $this->databaseUrl = $databaseUrl;
    }

    /**
     * @Route("/main", name="main")
     * @Security("is_granted('ROLE_USER')")
     */
    public function index(): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(WorkRecordType::class);
        return $this->render('main.html.twig', [
            "form" => $form->createView(),
            "user" => $user
        ]);
    }

    /**
     * @Route("/adminer", name="app.adminer")
     */
    public function pageAdminer(): Response
    {
        $status = session_status();
        return new StreamedResponse(
            function () use ($status){
                $dbConf = parse_url($this->databaseUrl);
                include dirname(__DIR__, 2) . "/adminer/boot.php";
            }
        );
    }
}
