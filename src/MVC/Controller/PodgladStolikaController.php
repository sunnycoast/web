<?php


namespace MVC\Controller;

session_start();
use Base\App;


class PodgladStolikaController extends App
{
    public function indexAction()
    {
        if ( isset($_SESSION['IdStolika']) )
        {

            $IdStolika=$_SESSION['IdStolika'];
//            var_dump($IdStolika);

            $em = $this ->getEntityManager();
            $qb = $em   ->getRepository('MVC\Model\Stolik')->createQueryBuilder('st')
                ->select('st.IdStolika, st.NazwaStolika, r.IdRachunku, r.NaImie, r.LiczbaOsob')
                ->innerJoin('MVC\Model\Rachunek','r','WITH', 'st.IdStolika= r.IdStolika')
                ->where('st.IdStolika =:IdStolika')
                ->setParameter('IdStolika', $IdStolika)
                ->orderBy('r.IdRachunku','DESC')
                ->getQuery();
            $rachunki = ($qb->execute());
//            print_r($rachunki);
            $rachunek = $rachunki[0];
//            print_r($rachunek);
//            print_r($prod['IdRachunku']);
            $IdRachunku=$rachunek['IdRachunku'];
//            print json_encode($rachunek[0]);

            $qb = $em   ->getRepository('MVC\Model\Rachunek')->createQueryBuilder('r')
                ->select(' pozz.LiczbaProduktow, pr.NazwaProduktu, pozm.CenaBrutto')
                ->innerJoin('MVC\Model\PozycjaZamowienia','pozz','WITH', 'r.IdRachunku= pozz.IdRachunku')
                ->innerJoin('MVC\Model\PozycjaMenu','pozm','WITH', 'pozz.IdPozycjiMenu= pozm.IdPozycjiMenu')
                ->innerJoin('MVC\Model\Produkt','pr','WITH', 'pozm.IdProduktu= pr.IdProduktu')
                ->where('r.IdRachunku =:IdRachunku')
                ->setParameter('IdRachunku', $IdRachunku)
                ->getQuery();
            $produkty=($qb->execute());
//            print_r($produkty);
            $dlugosc=count($produkty);
//            print_r($dlugosc);
            $ceny=array();
            $cena=0;
            foreach ($produkty as $produkt)
            {
                $ceny[]['Cena']=$produkt['LiczbaProduktow']*$produkt['CenaBrutto'];
            }
            $wynik =array();
            for($i=0;$i<$dlugosc;$i++)
            {

//                $wynik[$i]['NazwaProduktu']=$produkty[$i]['NazwaProduktu'];
//                $wynik[$i]['LiczbaProduktow']=$produkty[$i]['LiczbaProduktow'];
                $produkty[$i]['Cena']=$ceny[$i]['Cena'];
                $cena=$cena+$ceny[$i]['Cena'];
            }

//            print_r($wynik);
//            print_r($produkty);

//            print_r($cena);


//            $test=$produkty[1];
//            print_r($test);
//
//            $cena=$test['LiczbaProduktow']*$test['CenaBrutto'];
//            print_r($cena);


        }
        else
        {
            header('Location: /kelner_podglad_sali');
            exit();
        }

        return $this->render('MVC/View/podglad_stolika.html.twig', array(
            'rachunek'  => $rachunek,
            'produkty'  => $produkty,
            'ceny'      => $wynik,
            'cena'      => $cena,


        ));
    }
}