<?php

namespace MVC\Controller;

session_start();
use Base\App;
use MVC\Model\PozycjaZamowienia;
use MVC\Model\Rachunek;
use Symfony\Component\HttpFoundation\Response;

class ZamowienieController extends App
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
                $_SESSION['IdRachunku'];

                $em = $this->getEntityManager();
                try{
                    $bil = $em->getRepository(Rachunek::class)->find($_SESSION['IdRachunku']);
                    $em->remove($bil);
                    $em->flush();
                    session_unset();
                    session_destroy();
                    exit(header('Location: '.$url ));
                } catch (\Exception $e){    return new Response($e->getMessage());    }
            }
            if(isset($_POST['backToSummary']))
            {
                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/podsumowanie";
                $_SESSION['currentAddress']="";
                exit(header('Location: '.$url ));
            }
            else
            {
                var_dump($_SESSION['IdRachunku']);
                if (!empty($_POST))
                {
                    $em = $this->getEntityManager();
                    foreach ($_POST as $key => $value)
                    {
                        $qb = $em->getRepository(PozycjaZamowienia::class)
                            ->createQueryBuilder('pm')
                            ->Where('pm.IdRachunku = :id_r')
                            ->andWhere('pm.IdPozycjiMenu = :id_pm')
                            ->setParameter('id_r',  $_SESSION['IdRachunku'])
                            ->setParameter('id_pm', $key)
                            ->getQuery();
                        $order = ($qb->execute());
                        try {
                            if (empty($order))
                            {
                                $order = new PozycjaZamowienia($_SESSION['IdRachunku'], $key, intval($value));
                                $em->persist($order);
                                $em->flush();
                            }
                            else
                            {
                                $order = $order[0];
                                $order->addLiczbaProduktow(intval($value));
                                $em->flush();
                            }
                        } catch (\Exception $e){    return new Response($e->getMessage());    }
                    }
                    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/podsumowanie";
                    $_SESSION['currentAddress']="";
                    exit(header('Location: '.$url ));
                }
                else
                {
                    //TODO get order and render add order.toArray()
                    $_SESSION['currentAddress'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    $em = $this ->getEntityManager();

                    $qb = $em   ->getRepository('MVC\Model\Kategoria')->createQueryBuilder('k')
                                ->select('k.IdKategorii, k.NazwaKategorii, k.KolorKategorii')
                                ->getQuery();
                    $kategorie = ($qb->execute());

                    $qb = $em   ->getRepository('MVC\Model\PozycjaMenu')->createQueryBuilder('pm')
                                ->select('p.IdKategorii, pm.IdPozycjiMenu, p.NazwaProduktu, pm.CenaBrutto, p.Opis, v.StawkaVAT')
                                ->innerJoin('MVC\Model\Produkt', 'p', 'WITH', 'pm.IdProduktu = p.IdProduktu')
                                ->innerJoin('MVC\Model\VAT', 'v', 'WITH', 'pm.IdVAT = v.IdVAT')
                                //->Where('p.IdKategorii < :id_k')
                                //->setParameter('id_k',$id_k)
                                ->getQuery();
                    $menu = ($qb->execute());

                    $qb = $em   ->getRepository('MVC\Model\PozycjaZamowienia')->createQueryBuilder('pz')
                        ->select('pz.IdPozycjiMenu, pz.LiczbaProduktow')
                        ->Where('pz.IdRachunku = :id_r')
                        ->setParameter('id_r', $_SESSION['IdRachunku'])
                        ->getQuery();
                    $bil = ($qb->execute());

                    $_SESSION['currentAddress'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    $render = $this->render('MVC/View/zamowienie.html.twig', array(
                        'imie'      => $_SESSION['imie'],
                        'kategorie' => $kategorie,
                        'order'     => $bil,
                        'menu'      => $menu,
                        'log_adres' => $_SESSION['log_adres'],
                    ));
                }
            }
		}
		else
            exit(header('Location: /gosc_logowanie'));
        return $render;
    }
}