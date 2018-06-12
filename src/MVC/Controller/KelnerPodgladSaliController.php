<?php


namespace MVC\Controller;

session_start();
use Base\App;


class KelnerPodgladSaliController extends App
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
            ->select('st.IdStolika, st.NazwaStolika, st.LiczbaMiejsc, se.IdSektora,  se.NazwaSektora, se.Aktywny')
            ->innerJoin('MVC\Model\Sektor', 'se', 'WITH', 'st.IdSektora = se.IdSektora')
            ->getQuery();

        $stoliki = ($qb->execute());


        if (isset($_POST['1']) ){

            $st= $stoliki[0];
            $idSt=$st['IdStolika'];
            $_SESSION['IdStolika'] = $idSt;


            header('Location: /podglad_stolika');
            exit();
        }
        else if (isset($_POST['2']) ){
            $st= $stoliki[1];
            $idSt=$st['IdStolika'];
            $_SESSION['IdStolika'] = $idSt;


            header('Location: /podglad_stolika');
            exit();
        }
        else if (isset($_POST['3']) ){
            $st= $stoliki[2];
            $idSt=$st['IdStolika'];
            $_SESSION['IdStolika'] = $idSt;


            header('Location: /podglad_stolika');
            exit();
        }
        else if(isset($_POST['4']) ){
            $st= $stoliki[3];
            $idSt=$st['IdStolika'];
            $_SESSION['IdStolika'] = $idSt;


            header('Location: /podglad_stolika');
            exit();
        }
        else if (isset($_POST['5']) ){
            $st= $stoliki[4];
            $idSt=$st['IdStolika'];
            $_SESSION['IdStolika'] = $idSt;


            header('Location: /podglad_stolika');
            exit();
        }



        return $this->render('MVC/View/kelner_podglad_sali.html.twig', array(
            'imie'      => $_SESSION['imie'],
            'rola'      => $_SESSION['uzytkownik'],
            'stoliki'  => $stoliki,
            'sektory ' => $sektory ,

        ));

    }

}