<?php

namespace App\Controller;

use App\Form\CredentialType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, UserRepository $userRepository): Response
    {
        $error = false;
        $form = $this->createForm(CredentialType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $form_data = $form->getData();
            $credential = $form_data['credential'];

            if($user = $userRepository->findOneBy([
                'credential' => $credential
                ], [])) {

                if ($user->getAssigned() == true) {
                    return $this->render('figure/selected.html.twig', [
                            'user' => $user,
                            'figure' => $user->getFigure()
                        ]
                    );
                } else {
                    return $this->render('figure/shuffle.html.twig', [
                            'user' => $user,
                            'figure' => $user->getFigure()
                        ]
                    );
                }
            } else {
                $error = true;
            }


//            return $this->redirectToRoute('app_home');
        }

        return $this->renderForm('home/index.html.twig', [
            'credential_form' => $form,
            'controller_name' => 'HomeController',
            'error' => $error
        ]);
    }

//    #[Route('/user', name: 'app_user')]
//    public function index(): Response
//    {
//        return $this->render('user/index.html.twig', [
//            'controller_name' => 'UserController',
//        ]);
//    }
}
