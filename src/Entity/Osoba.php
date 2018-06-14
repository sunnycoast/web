<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 2018-05-11
 * Time: 00:47
 */
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ORM\Table(name="Osoba")
 * @ORM\Entity(repositoryClass="App\Repository\OsobaRepository")
 */
class Osoba
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $IdOsoby;

    /**
     * @ORM\Column(type="string")
     */
    protected $Email;

    /**
     * @ORM\Column(type="string")
     */
    protected $Imie;

    /**
     * @ORM\Column(type="string")
     */
    protected $Nazwisko;

    //true(1) mężczyzna false(0)kobieta
    /**
     * @ORM\Column(type="boolean")
     */
    protected $Plec;

    /**
     * @ORM\Column(type="string")
     */
    protected $NrTelefonu;

    /**
     * @ORM\Column(type="date")
     */
    protected $DataUrodzenia;

//    public function __construct ($Email, $Imie, $Nazwisko, $Plec, $NrTelefonu, $date)
//    {
//        $this->Email            = $Email;
//        $this->Imie             = $Imie;
//        $this->Nazwisko         = $Nazwisko;
//        $this->Plec             = $Plec;
//        $this->NrTelefonu       = $NrTelefonu;
//        $this->DataUrodzenia    = new \DateTime($date);
//    }

    public function __construct()
    {

    }

    public function getIdOsoby()
    {    return $this->IdOsoby;    }

    public function getEmail()
    {    return $this->Email;    }

    public function setEmail($Email)
    {    $this->Email = $Email;    }

    public function getImie()
    {    return $this->Imie;    }

    public function setImie($Imie)
    {    $this->Imie = $Imie;    }

    public function getNazwisko()
    {    return $this->Nazwisko;    }

    public function setNazwisko($Nazwisko)
    {    $this->Nazwisko = $Nazwisko;    }

    public function getPlec()
    {    return $this->Plec;    }

    public function setPlec($Plec)
    {    $this->Plec = $Plec;    }

    public function getNrTelefonu()
    {    return $this->NrTelefonu;    }

    public function setNrTelefonu($NrTelefonu)
    {    $this->NrTelefonu = $NrTelefonu;    }

    public function getDataUrodzenia()
    {    return $this->DataUrodzenia;    }

    /**
     * @param mixed $IdOsoby
     */
    public function setIdOsoby($IdOsoby): void
    {
        $this->IdOsoby = $IdOsoby;
    }

    /**
     * @param mixed $DataUrodzenia
     */
    public function setDataUrodzenia($DataUrodzenia): void
    {
        $this->DataUrodzenia = $DataUrodzenia;
    }

}