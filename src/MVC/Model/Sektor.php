<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="sektory")
 **/
class Sektor
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $IdSektora;

    /** @Column(type="string") **/
    protected $NazwaSektora;

    /** @Column(type="boolean") **/
    protected  $Aktywny;

    public function __construct ($NazwaSektora, $Aktywny = 0)
    {
        $this->NazwaSektora = $NazwaSektora;
        $this->Aktywny      = $Aktywny;
    }
    public function getIdSektora()
    {    return $this->IdSektora;    }

    public function getNazwaSektora()
    {    return $this->NazwaSektora;    }

    public function setNazwaSektora($NazwaSektora)
    {    $this->NazwaSektora = $NazwaSektora;    }

    public function getAktywny()
    {    return $this->Aktywny;    }

    public function setAktywny($Aktywny)
    {    $this->Aktywny = $Aktywny;    }

}