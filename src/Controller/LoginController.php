<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        $user = $this->getUser();

        if ($this->getUser()) {
            return $this->redirectToRoute('overview');
        }

        return $this->render('login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'user' => $user
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        // No need to write any code here, the logout is handled by Symfony security component
    }

    /**
     * @Route("/success", name="success")
     */
    public function success(): Response
    {
        return $this->render('success.html.twig');
    }
}
