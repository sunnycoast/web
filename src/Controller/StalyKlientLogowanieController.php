<?php
 
namespace MVC\Controller;



namespace App\Controller;
use App\Entity\Pracownik;
use App\Entity\StalyKlient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//session_start();
use App\Entity\Rachunek;
use App\Entity\Sektor;
use App\Entity\Stolik;

class StalyKlientLogowanieController extends Controller
{
    /**
     * @Route("/staly_klient_logowanie")
     */
    public function indexAction()
    {
        $email 	= '';
        $haslo   = '';
        $imie   = '';
        $err    = '';

        if( isset($_POST['email']) && isset($_POST['haslo'])) {
            $email = $_POST['email'];
            $haslo = $_POST['haslo'];
            $users= '';
            $prac='';



            $logged = false;
            //login:
            //test@test.pl
            //pass:
            //???
            if ($email== 'test@test.pl')
            {
                $em = $this ->getEntityManager();
                $prac =  $em->getRepository(Pracownik::class)->getPrac($haslo);
            }

            else {
                $em = $this->getEntityManager();

                /*
                $qb = $em->getRepository('MVC\Model\StalyKlient')->createQueryBuilder('sk')
                    ->select('sk.Haslo', 'os.Email', 'os.Imie')
                    ->innerJoin('MVC\Model\Osoba', 'os', 'WITH', 'sk.IdOsoby = os.IdOsoby')
                    ->Where('sk.Haslo = :haslo AND os.Email=:email')
                    ->setParameters([':haslo' => $haslo, ':email' => $email])
                    ->getQuery();
                $users = ($qb->execute());
                */

                $users = $em->getRepository(StalyKlient::class)->getKlient($haslo, $email);
            }

            print_r($prac);
            print_r($users);
            //var_dump($user);
            //var_dump($user);
            //print json_encode($user[0]);



            if (empty($users))
            {
                if (empty($prac))
                {
                    $err = 'Podano błędny login lub hasło';
                }
                else{
                    $user = $prac[0];
                    $imie = $user['Imie'];
                    $rola = $user['NazwaRoli'];

                    $_SESSION['imie' ] = $imie;
                    $_SESSION['zalogowany'] = true;
                    $_SESSION['uzytkownik'] = $rola;
                    $_SESSION['log_adres' ] = 'test403.pl/staly_klient_logowanie';
                    header('Location:/kelner_podglad_sali');
                    exit();

                }

            }
            else {
                $user = $users[0];
                $imie = $user['Imie'];

                $rachunek = new Rachunek($imie, 3, 2);
                $em = $this->getEntityManager();
                try {
                    $em->persist($rachunek);
                    $em->flush();
                } catch (\Exception $e){    return new Response($e->getMessage());    }

                $_SESSION['IdRachunku'] = $rachunek->getIdRachunku();
                $_SESSION['imie' ] = $imie;
                $_SESSION['zalogowany'] = true;
                $_SESSION['uzytkownik'] = 'Staly_klient';
                $_SESSION['log_adres' ] = 'test403.pl/staly_klient_logowanie';

                header('Location: ' . $imie . '/zamowienie');
                exit();
            }
    }
        return $this->render('staly_klient_logowanie.html.twig', array(
            'email'   => $email,
            'haslo'   => $haslo,
            'err'    => $err
        ));
 
    }
    public function getEntityManager()
    {
        //$this->entityManager =$this->getDoctrine();
        //return $this->entityManager;
        return $this->getDoctrine();
    }
}