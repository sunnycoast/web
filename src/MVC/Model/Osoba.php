<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="osoby")
 **/
class Osoba
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $IdOsoby;

    /** @Column(type="string") */
    protected $Email;

    /** @Column(type="string") */
    protected $Imie;

    /** @Column(type="string") */
    protected $Nazwisko;

    //true(1) mężczyzna false(0)kobieta
    /** @Column(type="boolean") */
    protected $Plec;

    /** @Column(type="string") */
    protected $NrTelefonu;

    /** @Column(type="date") */
    protected $DataUrodzenia;

    public function __construct ($Email, $Imie, $Nazwisko, $Plec, $NrTelefonu, $date)
    {
        $this->Email            = $Email;
        $this->Imie             = $Imie;
        $this->Nazwisko         = $Nazwisko;
        $this->Plec             = $Plec;
        $this->NrTelefonu       = $NrTelefonu;
        $this->DataUrodzenia    = new \DateTime($date);
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

}