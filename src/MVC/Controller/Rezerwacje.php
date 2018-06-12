<?php

namespace MVC\Controller;

session_start();
use Base\App;
use MVC\Model\PozycjaZamowienia;
use MVC\Model\Rachunek;
use Symfony\Component\HttpFoundation\Response;

class Rezerwacje extends App
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
                //TODO get order and render add order.toArray()
                $_SESSION['currentAddress'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $em = $this ->getEntityManager();
                $qb = $em   ->getRepository('MVC\Model\PozycjaMenu')->createQueryBuilder('pm')
                            ->select('p.IdKategorii, pm.IdPozycjiMenu, p.NazwaProduktu, pm.CenaBrutto, p.Opis, v.StawkaVAT')
                            ->innerJoin('MVC\Model\Produkt', 'p', 'WITH', 'pm.IdProduktu = p.IdProduktu')
                            ->innerJoin('MVC\Model\VAT', 'v', 'WITH', 'pm.IdVAT = v.IdVAT')
                            //->Where('p.IdKategorii < :id_k')
                            //->setParameter('id_k',$id_k)
                            ->getQuery();
                $reservations = ($qb->execute());

                $_SESSION['currentAddress'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $render = $this->render('MVC/View/zamowienie.html.twig', array(
                    'imie'         => $_SESSION['imie'],
                    'reservations' => $reservations,
                    'log_adres' => $_SESSION['log_adres'],
                ));
            }
		}
		else
            exit(header('Location: /'));
        return $render;
    }
}