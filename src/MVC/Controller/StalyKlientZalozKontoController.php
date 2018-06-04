<?php
 
namespace MVC\Controller;
 
use Base\App;
use MVC\Model\Osoba;
use MVC\Model\StalyKlient;

class StalyKlientZalozKontoController extends App
{
    public function indexAction()
    {
        $email 	= '';
        $nazwisko  = '';
        $imie   = '';
        $err    = '';
        if (isset($_POST['email'])&&isset($_POST['imie'])&&isset($_POST['nazwisko'])&&isset($_POST['haslo']))
        {
            $email = substr($_POST['email'],0,30);
            $imie=substr($_POST['imie'],0,32);
            $nazwisko=substr($_POST['nazwisko'],0,32);
            $haslo=$_POST['haslo'];
            $salt='abcd';
            $pass = $haslo.$salt;
            $hash = hash('sha256',$pass);
            $em =$this-> getEntityManager();
            $user = $em->getRepository('MVC\Model\Osoba')->findOneBy([
                'Email'=>$email
            ]);
            if (!is_null($user))
            {
                $err = 'Jest już takie konto założone';
            }
            else{

                $osoba = new Osoba($email,$imie,$nazwisko,0,0,1234-56-78);
                $em->persist($osoba);
                $em->flush();
                $idO=$osoba->getIdOsoby();
                $klient = new StalyKlient($idO,$haslo);
                $em->persist($klient);
                $em->flush();
                $err = 'Konto zostało założone';
            }
        }

        return $this->render('MVC/View/staly_klient_zaloz_konto.html.twig', array(
            'email'  => $email,
            'imie' => $imie,
            'nazwisko' => $nazwisko,
            'err'    => $err,
        ));


    }
}