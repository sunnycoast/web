<?php

namespace MVC\Controller;

session_start();
use Base\App;
use MVC\Model\PozycjaZamowienia;
use MVC\Model\Rachunek;
use Symfony\Component\HttpFoundation\Response;

class RezerwacjeController extends App
{
    public function indexAction()
    {
		if (!empty($_SESSION))
		{
            $_SESSION['currentAddress'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $em = $this ->getEntityManager();
            $qb = $em   ->getRepository('MVC\Model\Rezerwacje')->createQueryBuilder('r')
                        ->select('r.IdRezerwacji', 'r.DataRezerwacji', 'r.StolikWybrany', 'ra.IdRachunku', 'ra.LiczbaOsob', 'r.IdStalegoKlienta', 's.IdStolika', 'se.NazwaSektora')
                        ->innerJoin('MVC\Model\Rachunek', 'ra', 'WITH', 'r.IdRachunku = ra.IdRachunku')
                        ->innerJoin('MVC\Model\Stolik', 's', 'WITH', 'ra.IdStolika = s.IdStolika')
                        ->innerJoin('MVC\Model\Sektor', 'se', 'WITH', 's.IdSektora = se.IdSektora')
                        ->Where('r.IdStalegoKlienta = :id_k')
                        ->setParameter('id_k', $_SESSION['customerID'])
                        ->getQuery();
            $reservations = ($qb->execute());
            //print_r($reservations);
            $_SESSION['currentAddress'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $render = $this->render('MVC/View/rezerwacje.html.twig', array(
                'imie'         => $_SESSION['imie'],
                'reservations' => $reservations,
                'log_adres'    => $_SESSION['log_adres'],
            ));
		}
		else
            exit(header('Location: /'));
        return $render;
    }
}