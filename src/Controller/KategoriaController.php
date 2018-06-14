<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Kategoria;
class KategoriaController extends Controller
{
    /**
     * @Route("/kategoria", name="kategoria")
     */
    public function index()
    {

        $entityManager = $this->getDoctrine()->getManager();

//        $kategoria = new Kategoria('zupy');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
//        $entityManager->persist($kategoria);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        //return new Response('Saved new product with id '.$kategoria->getIdKategorii());
        return $this->render('kategoria/index.html.twig', [
            'controller_name' => 'KategoriaController',
        ]);
    }
}
