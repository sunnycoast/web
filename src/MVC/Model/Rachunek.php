<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="rachunki")
 **/
class Rachunek
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $IdRachunku;

    /** @Column(type="string") */
    protected $NaImie;

    /** @Column(type="integer") */
    protected $LiczbaOsob;

    /** @Column(type="datetime") */
    protected $DataOtwarcia;

    /** @Column(type="string") */
    protected $Platnosc;

    /** @Column(type="datetime") */
    protected $DataZamkniecia;

    /** @Column(type="string") */
    protected $UwagiPracownika;

    /** @Column(type="string") */
    protected $UwagiGoscia;

    /**
     * @ManyToOne (targetEntity = "Stolik")
     * @JoinColumn (name = "IdStolika", referencedColumnName = "id")
     * @Column(type="integer")
     */
    protected $IdStolika;

    /** @Column(type="integer") */
    protected $IdStalegoKlienta;

    public function __construct ($NaImie, $LiczbaOsob, $IdStolika, $IdStalegoKlienta = null)
    {
        $this->NaImie           = $NaImie;
        $this->LiczbaOsob       = $LiczbaOsob;
        $this->IdStolika        = $IdStolika;
        $this->DataOtwarcia     = new \DateTime();
        $this->IdStalegoKlienta = $IdStalegoKlienta;
    }

    public function getIdRachunku()
    {    return $this->IdRachunku;    }

    public function getNaImie()
    {    return $this->NaImie;    }

    public function setNaImie($NaImie)
    {    $this->NaImie = $NaImie;    }

    public function getLiczbaOsob()
    {    return $this->LiczbaOsob;    }

    public function setLiczbaOsob($LiczbaOsob)
    {    $this->LiczbaOsob = $LiczbaOsob;    }

    public function getDataOtwarcia()
    {    return $this->DataOtwarcia;    }

    public function setDataOtwarciaNow()
    {    $this->DataOtwarcia = new \DateTime();    }

    public function setDataOtwarcia($dateTime)
    {    $this->DataOtwarcia = new \DateTime($dateTime);    }

    public function getPlatnosc()
    {    return $this->Platnosc;    }

    public function setPlatnosc($Platnosc)
    {    $this->Platnosc = $Platnosc;    }

    public function getDataZamkniecia()
    {    return $this->DataZamkniecia;    }

    public function setDataZamknieciaNow()
    {    $this->DataZamkniecia = new \DateTime();    }

    public function setDataZamkniecia($dateTime)
    {    $this->DataZamkniecia = new \DateTime($dateTime);    }

    public function getUwagiPracownika()
    {    return $this->UwagiPracownika;    }

    public function setUwagiPracownika($UwagiPracownika)
    {    $this->UwagiPracownika = $UwagiPracownika;    }

    public function getUwagiGoscia()
    {    return $this->UwagiGoscia;    }

    public function setUwagiGoscia($UwagiGoscia)
    {    $this->UwagiGoscia = $UwagiGoscia;    }

    public function getIdStolika()
    {    return $this->IdStolika;    }

    public function setIdStolika($IdStolika)
    {    $this->IdStolika = $IdStolika;    }

    public function getIdStalegoKlienta()
    {    return $this->IdStalegoKlienta;    }

    public function setIdStalegoKlienta($IdStalegoKlienta)
    {    $this->IdStalegoKlienta = $IdStalegoKlienta;    }

}