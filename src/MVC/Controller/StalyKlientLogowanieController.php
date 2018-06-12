<?php
 
namespace MVC\Controller;

session_start();
 
use Base\App;
use MVC\Model\Rachunek;

class StalyKlientLogowanieController extends App
{
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

            if ($email== 'test@test.pl')
            {
                $em = $this->getEntityManager();
                $qb = $em->getRepository('MVC\Model\Pracownik')->createQueryBuilder('pr')
                    ->select('pr.PIN', 'os.Imie', 'os.Nazwisko', 'rol.NazwaRoli')
                    ->innerJoin('MVC\Model\Osoba', 'os', 'WITH', 'pr.IdOsoby = os.IdOsoby')
                    ->Where('pr.PIN = :haslo')
                    ->setParameter(':haslo' , $haslo)
                    ->innerJoin('MVC\Model\Rola', 'rol', 'WITH', 'pr.IdRoli = rol.IdRoli')
                    ->andWhere('pr.IdRoli = rol.IdRoli')
                    ->getQuery();

                $prac = ($qb->execute());
            }

            else {
                $em = $this->getEntityManager();
                $qb = $em->getRepository('MVC\Model\StalyKlient')->createQueryBuilder('sk')
                    ->select('sk.IdStalegoKlienta', 'sk.Haslo', 'os.Email', 'os.Imie', 'os.Nazwisko')
                    ->innerJoin('MVC\Model\Osoba', 'os', 'WITH', 'sk.IdOsoby = os.IdOsoby')
                    ->Where('sk.Haslo = :haslo AND os.Email=:email')
                    ->setParameters([':haslo' => $haslo, ':email' => $email])
                    ->getQuery();
                $users = ($qb->execute());
            }

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
                    $_SESSION['log_adres' ] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    header('Location:/kelner_podglad_sali');
                    exit();

                }
            }
            else {
                $user = $users[0];
                $imie = $user['Imie'];

                $rachunek = new Rachunek($user['Imie'], 3, 2);
                $em = $this->getEntityManager();
                try {
                    $em->persist($rachunek);
                    $em->flush();
                } catch (\Exception $e){    return new Response($e->getMessage());    }

                $_SESSION['IdRachunku'] = $rachunek->getIdRachunku();
                $_SESSION['customerID'] = $user['IdStalegoKlienta'];
                $_SESSION['imie' ] = $imie;
                $_SESSION['nazwisko' ] = $user['Nazwisko'];
                $_SESSION['zalogowany'] = true;
                $_SESSION['uzytkownik'] = 'Staly_klient';
                $_SESSION['log_adres' ] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                header('Location: '.$imie.'/'.$user['Nazwisko']);
                exit();
            }
        }

        return $this->render('MVC/View/staly_klient_logowanie.html.twig', array(
            'email'   => $email,
            'haslo'   => $haslo,
            'err'     => $err
        ));
    }
}