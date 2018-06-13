<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//session_start();
use App\Entity\Rachunek;
use App\Entity\Sektor;
use App\Entity\Stolik;
use App\Entity\Pracownik;
class PracownikLogowanieController extends Controller
{
    /**
     * @Route("/pracownik_logowanie")
     */
    public function indexAction()
    {
        if( isset($_POST['pin']) )
        {
            $pin 	= $_POST['pin'];
            $err = 'przeszlo';


            $render = $this->render('pracownik_logowanie.html.twig', array(
                'err'    => $err
            ));
        } else
        {
            $render = $this->render('pracownik_logowanie.html.twig', array(
                'err'    => ''
            ));
        }
        return $render;
    }
}