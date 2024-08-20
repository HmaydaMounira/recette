<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use symfony\component\HttpFoundation\Response;
use symfony\component\Routing\Annotation\Route;
class HomeController extends AbstractController
{

   #[Route('/', 'home.index',methods:['GET'])]
public function index():Response
{
    return $this->render('home.html.twig');
}
}
?>