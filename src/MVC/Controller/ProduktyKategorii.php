<?php


namespace MVC\Controller;

session_start();
use Base\App;


class ProduktyKategorii extends App
{
    public function indexAction()
    {
        if ( isset($_SESSION['IdKategorii']) && isset($_SESSION['NazwaKategorii']) )
        {

            $IdKategorii=$_SESSION['IdKategorii'];

            $em = $this ->getEntityManager();
            $qb = $em   ->getRepository('MVC\Model\Kategoria')->createQueryBuilder('k')
                ->select('pr.NazwaProduktu, pr.Opis, k.NazwaKategorii')
                ->innerJoin('MVC\Model\Produkt','pr','WITH', 'k.IdKategorii= pr.IdKategorii')
                ->where('k.IdKategorii =:IdKategorii')
                ->setParameter('IdKategorii', $IdKategorii)
                ->getQuery();
            $produkty = ($qb->execute());
//            print_r($produkty);
            $prod = $produkty[0];
            $nazKat = $prod['NazwaKategorii'];
//            print json_encode($produkty[0]);


        }
        else
        {
            header('Location: /menu');
            exit();
        }

        return $this->render('MVC/View/produkty_kategorii.html.twig', array(
            'produkty'  => $produkty,
            'nazKat'    => $nazKat,
        ));
    }
}