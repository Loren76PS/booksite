<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsuarioController extends Controller
{
    public function showListAction()
    {
        $users = $this->getDoctrine()->getRepository(Usuario::class)->findAll();

        return $this->render('show_people_list.html.twig', array(
            'users' => $users,
        ));
    }
}
