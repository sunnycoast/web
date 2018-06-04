<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="pracownicy")
 **/
class Pracownik
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $IdPracownika;

    /** @Column(type="string") */
    protected $PIN;

    /**
     * @ManyToOne (targetEntity = "Rola")
     * @Column(type="integer")
     */
    protected $IdRoli;

    /**
     * @ManyToOne (targetEntity = "Osoba")
     * @Column(type="integer")
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

}