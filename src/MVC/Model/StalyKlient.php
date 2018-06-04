<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="stali_klienci")
 **/
class StalyKlient
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $IdStalegoKlienta;

    /** @Column(type="string") */
    protected $Haslo;

    /** @Column(type="boolean") */
    protected $InformacjaHandlowa;
 
    /** @Column(type="string") */
    protected $Znizka;

    /**
     * @ManyToOne (targetEntity = "Osoba")
     * @JoinColumn (name = "IdOsoby", referencedColumnName = "id")
     * @Column(type="integer")
     */
    protected $IdOsoby;

    public function __construct ($IdOsoby, $Haslo, $InformacjaHandlowa = 1, $Znizka = 5)
    {
        $this->IdOsoby              = $IdOsoby;
        $this->Haslo                = $Haslo;
        $this->Znizka               = $Znizka;
        $this->InformacjaHandlowa   = $InformacjaHandlowa;
    }

    public function getIdStalegoKlienta()
    {    return $this->IdStalegoKlienta;    }

    public function getHaslo()
    {    return $this->Haslo;    }

    public function setHaslo($Haslo)
    {    $this->Haslo = $Haslo;    }

    public function getInformacjaHandlowa()
    {    return $this->InformacjaHandlowa;    }

    public function setInformacjaHandlowa($InformacjaHandlowa)
    {    $this->InformacjaHandlowa = $InformacjaHandlowa;    }

    public function getZnizka()
    {    return $this->Znizka;    }

    public function setZnizka($Znizka)
    {    $this->Znizka = $Znizka;    }

    public function getIdOsoby()
    {    return $this->IdOsoby;    }

}