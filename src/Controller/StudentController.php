<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use  Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
Class StudentController extends AbstractController {
    #[Route('/welcome')]
    
    public function index() {
       return new Response("Bonjour 3A19/3A20"); 
    }
}
?>