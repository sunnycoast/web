<?php


namespace MVC\Controller;

session_start();
use Base\App;
use MVC\Model\Rachunek;
use Symfony\Component\HttpFoundation\Response;

class GoscLogowanieController extends App
{
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
            $qb = $em   ->getRepository('MVC\Model\Stolik')->createQueryBuilder('st')
                        ->select('st.IdStolika, st.LiczbaMiejsc,  se.NazwaSektora, se.Aktywny')
                        ->innerJoin('MVC\Model\Sektor', 'se', 'WITH', 'st.IdSektora = se.IdSektora')
                        ->Where('st.KodStolika = :k_stol')
                        ->setParameter('k_stol', $k_stol)
                        ->getQuery();

            $stoliki = ($qb->execute());

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
                        $rachunek = new Rachunek($imie, $l_os, $stolik['IdStolika']);
                        $em = $this->getEntityManager();
                        try {
                                $em->persist($rachunek);
                                $em->flush();
                            } catch (\Exception $e){    return new Response($e->getMessage());    }

                        $_SESSION['IdRachunku'] = $rachunek->getIdRachunku();
                        $_SESSION['imie' ] = $imie;
                        $_SESSION['zalogowany'] = true;
                        $_SESSION['uzytkownik'] = 'Gość';
                        $_SESSION['log_adres' ] = 'http://prztw.pl/gosc_logowanie';
                        $_SESSION['currentAddress'] = "";
                        exit(header('Location: '.$imie.'/zamowienie'));
                    }
                }
            }
        }

        return $this->render('MVC/View/gosc_logowanie.html.twig', array(
            'imie'   => $imie,
            'l_os'   => $l_os,
            'k_stol' => $k_stol,
            'err'    => $err
        ));
    }
}