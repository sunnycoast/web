<?php

namespace MVC\Controller;

session_start();

use Base\App;

class StartController extends App
{
    public function indexAction()
    {
        if(isset($_SESSION['currentAddress'])
            && $_SESSION['currentAddress']!==""
            && $_SESSION['currentAddress']!=="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")
            exit(header('Location: ' . $_SESSION['currentAddress']));

        return $this->render('MVC/View/start.html.twig', array());
    }
}

/*
$em =$this-> getEntityManager();
$row = $em->getRepository('MVC\Model\Produkt')->findOneBy(['NazwaProduktu'=>'Piwo']);
echo'<pre>';
print_r($row);
die;
//*/

/*
$em = $this -> getEntityManager();
$qb = $em   ->getRepository('MVC\Model\Produkt')->createQueryBuilder('p')
            ->select('p.IdProduktu, p.NazwaProduktu, ca.NazwaKategorii')
            ->innerJoin('MVC\Model\Kategoria','ca', 'WITH','p.IdKategorii = ca.IdKategorii')
            ->Where('p.IdProduktu < :id')
            ->setParameter('id',5)
            ->orderBy('p.IdProduktu','ASC')
            ->getQuery();

echo'<pre>';
print_r($qb->execute());
die;
//*/

/*
$em = $this -> getEntityManager();
$qb = $em   ->getRepository('MVC\Model\VAT')->createQueryBuilder('p')
            ->select('p')
            ->getQuery();

echo'<pre>';
print_r($qb->execute());
die;

                try {
            $em = $this->getEntityManager();
            $bil = $em->getRepository(Rachunek::class)->find($_SESSION['IdRachunku']);
            //print_r($bil);
            $bil->setPlatnosc($_POST['payment']);
            $em->flush();
            $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/zamkniecie/rachunku";
            header('Location: '.$url );
        } catch (\Exception $e){    return new Response($e->getMessage());    }
        //$em->getRepository('YourRepo')->findById(array(1,2,3,4,5));
//*/