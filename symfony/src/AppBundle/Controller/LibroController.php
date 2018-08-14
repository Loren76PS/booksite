<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Libro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LibroController extends Controller
{

    /**
     * Show the Book.
     */
    public function showAction($id)
    {
        $book= $this->getDoctrine()->getRepository(Libro::class)->find($id);



        return $this->render('show_book_profile.html.twig', array(
            'book' => $book,
        ));
    }
    public function showListAction()
    {
        $book= $this->getDoctrine()->getRepository(Libro::class)->findAll();

        return $this->render('show_book_list.html.twig', array(
            'book' => $book,
        ));
    }
    public function editAction()
    {


        return $this->render('show_book_profile.html.twig', array(

        ));
    }
}
