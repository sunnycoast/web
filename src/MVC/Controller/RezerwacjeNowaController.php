<?php

namespace MVC\Controller;

session_start();
use Base\App;
use MVC\Model\PozycjaZamowienia;
use MVC\Model\Rachunek;
use MVC\Model\Rezerwacje;
use Symfony\Component\HttpFoundation\Response;

class RezerwacjeNowaController extends App
{
    public function indexAction()
    {
        $err = "";
        if(!empty($_SESSION))
        {
            if(!empty($_POST))
            {
                $date 	         = $_POST["date"];
                $time 	         = $_POST["time"];
                $numberOfPeople = $_POST["numberOfPeople"];
                $visitTime 	     = $_POST["visitTime"];
                $sector 	     = $_POST["sector"];
                $tableNumber 	 = $_POST["tableNumber"];

                $em = $this ->getEntityManager();
                $qb = $em   ->getRepository('MVC\Model\Stolik')->createQueryBuilder('st')
                            ->select('st.IdStolika, st.IdSektora, st.LiczbaMiejsc')
                            ->Where('st.IdStolika = :id_stol')
                            ->andWhere('st.IdSektora = :id_sec')
                            ->setParameter('id_stol', $tableNumber)
                            ->setParameter('id_sec', $sector)
                            ->getQuery();

                $stoliki = ($qb->execute());

                if(empty($stoliki))
                {    $err = 'Niepoprawny numer stolika';    }
                else
                {
                    $stolik = $stoliki[0];
                    if ($numberOfPeople <= ($stolik['LiczbaMiejsc']-2))
                    {    $err="Przepraszamy stolik jest przeznaczony dla większej liczby osób. Uprzejmie prosimy o zmianę na mnieszy.";    }
                    else
                    {
                        $rachunek = new Rachunek($_SESSION['imie'], $numberOfPeople, $stolik['IdStolika']);

                        $em = $this->getEntityManager();

                        try {
                            $em->persist($rachunek);
                            $em->flush();
                            $rezerwacja = new Rezerwacje(($date.' '.$time.':00'), $rachunek->getIdRachunku(), $_SESSION['customerID']);
                            $em->persist($rezerwacja);
                            $em->flush();
                        } catch (\Exception $e){    return new Response($e->getMessage());    }
                        exit(header('Location: /'));
                    }
                }
            }
            $em = $this ->getEntityManager();
            $qb = $em   ->getRepository('MVC\Model\Sektor')->createQueryBuilder('sk')
                        ->select('sk.IdSektora', 'sk.NazwaSektora')
                        ->getQuery();
            $sectors = ($qb->execute());

            $qb = $em   ->getRepository('MVC\Model\Stolik')->createQueryBuilder('s')
                        ->select('s.IdStolika', 's.NazwaStolika', 's.KodStolika', 's.LiczbaMiejsc', 's.IdSektora')
                        ->getQuery();
            $tables = ($qb->execute());

            $render = $this->render('MVC/View/rezerwacjeNowa.html.twig', array(
                'sectors'      => $sectors,
                'tables'       => $tables,
                'err'          => $err
        ));
		}
		else
            exit(header('Location: /'));
        return $render;
    }
}