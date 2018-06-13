<?php


namespace App\Controller;
use App\Entity\Sektor;
use App\Entity\Stolik;
use App\Entity\Kategoria;
use App\Entity\Produkt;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//session_start();
use App\Rachunek;


class ProduktyKategorii extends Controller
{
    /**
     * @Route("/produkty_kategorii")
     */
    public function indexAction()
    {
        if ( isset($_SESSION['IdKategorii']) && isset($_SESSION['NazwaKategorii']) )
        {

            $IdKategorii=$_SESSION['IdKategorii'];

            $em = $this ->getEntityManager();
            $qb = $em   ->getRepository('App\Entity\Kategoria')->createQueryBuilder('k')
                ->select('pr.NazwaProduktu, pr.Opis, k.NazwaKategorii')
                ->innerJoin('App\Entity\Produkt','pr','WITH', 'k.IdKategorii= pr.IdKategorii')
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

        return $this->render('produkty_kategorii.html.twig', array(
            'produkty'  => $produkty,
            'nazKat'    => $nazKat,
        ));
    }
    public function getEntityManager()
    {
        //$this->entityManager =$this->getDoctrine();
        //return $this->entityManager;
        return $this->getDoctrine();
    }
}