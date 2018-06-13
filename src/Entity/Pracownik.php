<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 2018-05-11
 * Time: 00:38
 */
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table(name="pracownicy")
 * @ORM\Entity(repositoryClass="App\Repository\PracownikRepository")
 **/
class Pracownik implements \Serializable
{
    /** @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue */
    protected $IdPracownika;

    /** @ORM\Column(type="string") */
    protected $PIN;

    /**
     * @ORM\ManyToOne (targetEntity = "Rola")
     * @ORM\Column(type="integer")
     */
    protected $IdRoli;

    /**
     * @ORM\ManyToOne (targetEntity = "Osoba")
     * @ORM\Column(type="integer")
     */
    protected $IdOsoby;

    public function __construct ($PIN, $IdRoli, $IdOsoby, $StolikWybrany = 0)
    {
        $this->PIN     = $PIN;
        $this->IdRoli  = $IdRoli;
        $this->IdOsoby = $IdOsoby;
    }

    //  dodać stawki, tabelę dane pracownika(dane potrzebne do umowy)
    //  2-gie imie, adres zameldowania, adres zamieszkania, pesel, numer dowodu, miejsce urodzenia,
    //  bank, nr konta, urząd skarbowy, adres urzędu skarbowego, NFZ, adres urzędu NFZ

    //  zmiany asoc (IdRoli, IdZmiany, LiczbaMin, LiczbaMax lub Liczba(średnia)
    //  zmiany (IdZmiany, DzieńTygodnia lub DataTime(np 2 zmiany 12-18, 18-24)
    //  grafik (IdGrafiku, IdPracownika, PoczątekZmiany, KoniecZmiany, DataRozpoczęcia, DataZakończenia)
    public function getIdPracownika()
    {    return $this->IdPracownika;    }

    public function getPIN()
    {    return $this->PIN;    }

    //usunąć z konstruktora set zamienić na genarate
    public function setPIN($PIN)
    {    $this->PIN = $PIN;    }

    public function getIdRoli()
    {    return $this->IdRoli;    }

    public function getIdOsoby()
    {    return $this->IdOsoby;    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdPracownika,
            $this->PIN,
            $this->IdRoli,
            $this->IdOsoby,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdPracownika,
            $this->PIN,
            $this->IdRoli,
            $this->IdOsoby,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }
}