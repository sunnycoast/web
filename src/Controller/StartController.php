<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Base\App;

class StartController extends Controller#App2 #
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
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
        //*/

        return $this->render('start.html.twig', array());
    }
}