<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//session_start();
use App\Entity\Rachunek;
use App\Entity\Sektor;
use App\Entity\Stolik;

class GoscLogowanieController extends Controller
{
    /**
     * @Route("/gosc_logowanie")
     */
    public function indexAction()
    {
        $imie 	= '';
        $l_os   = '';
        $k_stol = '';
        $err    = '';
        if(isset($_SESSION['currentAddress'])
            && $_SESSION['currentAddress']!==""
            && $_SESSION['currentAddress']!=="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")
            exit(header('Location: ' .$_SESSION['currentAddress']));
        if( isset($_POST['imie']) && isset($_POST['l_os']) && isset($_POST['k_stol']))
        {
            $imie 	= $_POST['imie'];
            $l_os   = $_POST['l_os'];
            $k_stol = $_POST['k_stol'];

            $em = $this ->getEntityManager();

            $stoliki  = $em->getRepository(Stolik::class)->findStol($k_stol);

            if(empty($stoliki))
            {    $err = 'Niepoprawny kod stolika';    }
            else
            {
                $stolik = $stoliki[0];
                if (!$stolik['Aktywny'])
                {    $err = 'Przepraszamy sektor ' . $stolik['NazwaSektora'] . ' jest nie aktywny';    }
                else
                {
                    if ($l_os <= ($stolik['LiczbaMiejsc']-2))
                    {    $err="Uprzejmie prosilibyśmy o zmianę stolika na mniejszy.";    }
                    else
                    {
                        $entityManager = $this->getDoctrine()->getManager();
                        $rachunek = new Rachunek($imie, $l_os, $stolik['IdStolika']);
                        $em = $this->getEntityManager();
                        try {
                                $entityManager->persist($rachunek);
                                $entityManager->flush();
                            } catch (\Exception $e){    return new Response($e->getMessage());    }

                        $_SESSION['IdRachunku'] = $rachunek->getIdRachunku();
                        $_SESSION['imie' ] = $imie;
                        $_SESSION['zalogowany'] = true;
                        $_SESSION['uzytkownik'] = 'Gość';
                        $_SESSION['log_adres' ] = 'test403.pl/gosc_logowanie';

                        header('Location: '.$imie.'/zamowienie');
                        exit();
                    }
                }
            }
        }

        return $this->render('gosc_logowanie.html.twig', array(
            'imie'   => $imie,
            'l_os'   => $l_os,
            'k_stol' => $k_stol,
            'err'    => $err
        ));
    }
    public function getEntityManager()
    {
        //$this->entityManager =$this->getDoctrine();
        //return $this->entityManager;
        return $this->getDoctrine();
    }
}