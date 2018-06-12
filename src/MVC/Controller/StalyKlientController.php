<?php
 
namespace MVC\Controller;

session_start();
 
use Base\App;

class StalyKlientController extends App
{
    public function indexAction()
    {
        if (empty($_SESSION))
        {
            header('prztw.pl');
            exit();
        }
        else if(isset($_POST['clearSession']))
        {
            $url = $_SESSION['log_adres'];
            session_unset();
            session_destroy();
            exit(header('Location: '.$url ));
        }
        return $this->render('MVC/View/staly_klient.html.twig', array(
            'nameFirst' => $_SESSION['imie'],
            'nameLast'  => $_SESSION['nazwisko' ]
        ));
    }
}