<?php

namespace App\Controller;


use App\Entity\Usuario;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class LoginController extends AbstractController
{
    #[Route('/login', name: 'login',methods: ['POST'])]
    public function login(Request $request, EntityManagerInterface $em): JsonResponse
    {
      $data = json_decode($request->getContent(),true);

      $login = $data['login'] ?? '';
      $senha = $data['senha'] ?? '';

      $usuario = $em->getRepository(Usuario::class)->findOneBy(['login'=>$login]);
      if(!$usuario || $usuario -> getSenha() !== $senha)
      { 
        
        return new JsonResponse (['success' => false , 
        'message'=> 'LOGIN INCORRETO'
        ], 401);

      }
        return new JsonResponse(['success' => true, 'message' => 'Login OK']);
    }
}
