<?php

namespace MVC\Controller;

session_start();
use Base\App;
use MVC\Model\Rachunek;
use Symfony\Component\HttpFoundation\Response;

class ZamowieniePodsumowanieController extends App
{
    public function indexAction()
    {
		if ( isset($_SESSION['zalogowany']) && isset($_SESSION['IdRachunku']) )
        {
            if(isset($_SESSION['currentAddress'])
                && $_SESSION['currentAddress']!==""
                && $_SESSION['currentAddress']!=="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")
                exit(header('Location: ' .$_SESSION['currentAddress']));
            if(isset($_POST['payment']))
            {
                try {
                    $em = $this->getEntityManager();
                    $bil = $em->getRepository(Rachunek::class)->find($_SESSION['IdRachunku']);
                    $bil->setPlatnosc($_POST['payment']);
                    $em->flush();
                    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/zamkniecie/rachunku";
                    $_SESSION['payment'] = $_POST['payment'];
                    $_SESSION['currentAddress']="";
                    exit(header('Location: '.$url ));
                } catch (\Exception $e){    return new Response($e->getMessage());    }
            }
            if(isset($_POST['addOrder']))
            {
                $url = $_POST['addOrder'];
                $_SESSION['currentAddress']="";
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
                $render = $this->render('MVC/View/zamowienie_podsumowanie.html.twig', array(
                    'imie'      => $_SESSION['imie'],
                    'rachunek' => $r,
                    'log_adres' => $_SESSION['log_adres'],
                ));
            }
		}
		else
            exit(header('Location: /gosc_logowanie'));
        return $render;
    }
}