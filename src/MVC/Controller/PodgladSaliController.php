<?php

namespace MVC\Controller;

use Base\App;
use MVC\Model\Rachunek;
use Symfony\Component\HttpFoundation\Response;

class PodgladSaliController extends App
{
    public function indexAction()
    {
        $em = $this ->getEntityManager();

        $qb = $em   ->getRepository('MVC\Model\Sektor')->createQueryBuilder('st')
            ->select('se.IdSektora,  se.NazwaSektora, se.Aktywny')
            ->innerJoin('MVC\Model\Sektor', 'se', 'WITH', 'st.IdSektora = se.IdSektora')
            ->getQuery();

        $sektory = ($qb->execute());

        $qb = $em   ->getRepository('MVC\Model\Stolik')->createQueryBuilder('st')
            ->select('st.IdStolika, st.LiczbaMiejsc, se.IdSektora,  se.NazwaSektora, se.Aktywny')
            ->innerJoin('MVC\Model\Sektor', 'se', 'WITH', 'st.IdSektora = se.IdSektora')
            ->getQuery();

        $stoliki = ($qb->execute());


        return $this->render('MVC/View/podglad_sali.html.twig', array(
            'stoliki'  => $stoliki,
            'sektory ' => $sektory ,
        ));
    }
}