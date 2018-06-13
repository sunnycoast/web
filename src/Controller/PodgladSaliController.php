<?php

namespace App\Controller;
use App\Entity\Sektor;
use App\Entity\Stolik;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//session_start();
use App\Rachunek;

class PodgladSaliController extends Controller
{
    /**
     * @Route("/podglad_sali")
     */
    public function indexAction()
    {
        $em = $this ->getEntityManager();

        $sektory = $em->getRepository(Sektor::class)->findAll();

        $stoliki  = $em->getRepository(Stolik::class)->findAll();


        return $this->render('podglad_sali.html.twig', array(
            'stoliki'  => $stoliki,
            'sektory ' => $sektory ,
        ));
    }
    private $config;
    private $view;
    private $entityManager;
    private $urlGenerator;

    public function getEntityManager()
    {
        //$this->entityManager =$this->getDoctrine();
        //return $this->entityManager;
        return $this->getDoctrine();
    }
}