<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="stoliki")
 **/
class Stolik
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $IdStolika;

    /** @Column(type="string") **/
    protected $NazwaStolika;

    /** @Column(type="string") **/
    protected $KodStolika;

    /** @Column(type="integer") **/
    protected $LiczbaMiejsc;

    /** @Column(type="boolean") **/
    protected $Zajety;

    /**
     * @ManyToOne (targetEntity = "Sektor")
     * @JoinColumn (name = "IdSektora", referencedColumnName = "id")
     * @Column(type="integer")
     */
    protected $IdSektora;

    public function __construct ($NazwaStolika, $KodStolika, $IdSektora, $LiczbaMiejsc = 2, $Zajety = 0)
    {
        $this->NazwaStolika = $NazwaStolika;
        $this->KodStolika   = $KodStolika;
        $this->IdSektora    = $IdSektora;
        $this->LiczbaMiejsc = $LiczbaMiejsc;
        $this->Zajety       = $Zajety;
    }

    public function getIdStolika()
    {    return $this->IdStolika;    }

    public function getNazwaStolika()
    {    return $this->NazwaStolika;    }

    public function setNazwaStolika($NazwaStolika)
    {    $this->NazwaStolika = $NazwaStolika;    }

    public function getKodStolika()
    {    return $this->KodStolika;    }

    public function setKodStolika($KodStolika)
    {    $this->KodStolika = $KodStolika;    }

    public function getLiczbaMiejsc()
    {    return $this->LiczbaMiejsc;    }

    public function setLiczbaMiejsc($LiczbaMiejsc)
    {    $this->LiczbaMiejsc = $LiczbaMiejsc;    }

    public function getZajety()
    {    return $this->Zajety;    }

    public function setZajety($Zajety)
    {    $this->Zajety = $Zajety;    }

    public function getIdSektora()
    {    return $this->IdSektora;    }

    public function setIdSektora($IdSektora)
    {    $this->IdSektora = $IdSektora;    }

}