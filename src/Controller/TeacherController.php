<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/showTeacher.html.twig', ['name' => 'sirine']);
    }
    #[Route('/teacher/{name}')]
    public function showTeacher(string $name ){ 
        return new Response('Bonjour '.$name);
    }
    #[Route('/student')]
    public function goToIndex()
    {
        return $this->forward('App\Controller\StudentController::index');
        //return $this->redirect("http://127.0.0.1:8000/welcome");
        //return $this->redirectToRoute('welcome');
    }
}
