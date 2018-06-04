<?php

namespace MVC\Controller;

session_start();

use Base\App;
use MVC\Model\Rachunek;
use Symfony\Component\HttpFoundation\Response;

class ZamowienieZakonczController extends App
{
    public function indexAction()
    {
		if ( isset($_SESSION['zalogowany']) && isset($_SESSION['IdRachunku']) )
        {
            if(isset($_SESSION['currentAddress'])
                && $_SESSION['currentAddress']!==""
                && $_SESSION['currentAddress']!=="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")
                exit(header('Location: ' .$_SESSION['currentAddress']));
            if(isset($_POST['clearSession']))
            {
                $url = $_SESSION['log_adres'];
                session_unset();
                session_destroy();
                exit(header('Location: '.$url ));
            }
            else
            {
                $_SESSION['currentAddress'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $em = $this->getEntityManager();
                $qb = $em   ->getRepository('MVC\Model\PozycjaZamowienia')->createQueryBuilder('pz')
                    ->select('p.NazwaProduktu, p.Opis, pm.CenaBrutto, v.StawkaVAT, pz.LiczbaProduktow, pz.StanRealizacji')
                    ->innerJoin('MVC\Model\PozycjaMenu', 'pm', 'WITH', 'pm.IdPozycjiMenu = pz.IdPozycjiMenu')
                    ->innerJoin('MVC\Model\Produkt', 'p', 'WITH', 'pm.IdProduktu = p.IdProduktu')
                    ->innerJoin('MVC\Model\VAT', 'v', 'WITH', 'pm.IdVAT = v.IdVAT')
                    ->Where('pz.IdRachunku = :id_r')
                    ->setParameter('id_r', $_SESSION['IdRachunku'])
                    ->getQuery();
                $r = ($qb->execute());
                $render = $this->render('MVC/View/zamowienie_zakoncz.html.twig', array(
                    'imie'      => $_SESSION['imie'],
                    'rachunek'  => $r,
                    'payment'   => $_SESSION['payment'],
                    'log_adres' => $_SESSION['log_adres'],
                ));
            }
		}
		else
		    exit(header('Location: /gosc_logowanie'));
        return $render;
    }
}