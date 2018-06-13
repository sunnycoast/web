<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Base\Provider\TwigServiceProvider;
use Base\Provider\DoctrineServiceProvider;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\RequestContext;

use App\Entity\Kategoria;
use App\Entity\Produkt;
use App\Entity\VAT;
use App\Entity\PozycjaMenu;

class MenuController extends Controller
{
    /**
     * @Route("/menu")
     */
    public function indexAction()
    {
        $em = $this ->getEntityManager();
        $kategorie = $em->getRepository(Kategoria::class)->findAll();//($qb->execute());
        $menu = $em->getRepository(PozycjaMenu::class) ->getAll();



        if (isset($_POST['1']) ){

            $kat= $kategorie[0];
            $idKat=$kat['IdKategorii'];
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['2']) ){
            $kat= $kategorie[1];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['3']) ){
            $kat= $kategorie[2];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if(isset($_POST['4']) ){
            $kat= $kategorie[3];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['5']) ){
            $kat= $kategorie[4];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['6']) ){
            $kat= $kategorie[5];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if(isset($_POST['7']) ){
            $kat= $kategorie[6];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['8']) ){
            $kat= $kategorie[7];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['9']) ){
            $kat= $kategorie[8];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if(isset($_POST['10']) ){
            $kat= $kategorie[9];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['11']) ){
            $kat= $kategorie[10];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['12']) ){
            $kat= $kategorie[11];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if(isset($_POST['13']) ){
            $kat= $kategorie[12];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['14']) ){
            $kat= $kategorie[13];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['15']) ){
            $kat= $kategorie[14];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if(isset($_POST['16']) ){
            $kat= $kategorie[15];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['17']) ){
            $kat= $kategorie[16];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if (isset($_POST['18']) ){
            $kat= $kategorie[17];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }
        else if(isset($_POST['19']) ){
            $kat= $kategorie[18];
            $idKat=$kat['IdKategorii'];
            echo $idKat;
            $nazKat=$kat['NazwaKategorii'];
            $_SESSION['IdKategorii'] = $idKat;
            $_SESSION['NazwaKategorii'] = $nazKat;


            header('Location: /produkty_kategorii');
            exit();
        }

        return $this->render('menu.html.twig', array(
            'kategorie' => $kategorie,
            'menu'      => $menu
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