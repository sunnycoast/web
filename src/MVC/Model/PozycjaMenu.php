<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="pozycje_menu")
 **/
class PozycjaMenu
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $IdPozycjiMenu;

    /** @Column(type="float") */
    protected $CenaBrutto;

    /** @Column(type="datetime") */
    protected $DataWprowadzenia;

    /** @Column(type="datetime") */
    protected $DataWycofania;

    /**
     * @ManyToOne (targetEntity = "Produkt")
     * @JoinColumn (name = "IdProduktu", referencedColumnName = "id")
     * @Column(type="integer")
     */
    protected $IdProduktu;

    /**
     * @ManyToOne (targetEntity = "VAT")
     * @JoinColumn (name = "IdVAT", referencedColumnName = "id")
     * @Column(type="integer")
     */
    protected $IdVAT;

    public function __construct ($CenaBrutto, $DataWprowadzenia, $IdProduktu, $IdVAT, $DataWycofania = null)
    {
        $this->CenaBrutto       = $CenaBrutto;
        $this->DataWprowadzenia = $DataWprowadzenia;
        $this->IdProduktu       = $IdProduktu;
        $this->IdVAT            = $IdVAT;

        if(!is_null($DataWycofania))
        {    $this->DataWprowadzenia = new \DateTime($DataWycofania);    }
    }

    public function getIdPozycjiMenu()
    {    return $this->IdProduktu;    }

    public function getCenaBrutto()
    {    return $this->CenaBrutto;    }

    public function setCenaBrutto($CenaBrutto)
    {    $this->CenaBrutto = $CenaBrutto;    }

    public function getDataWprowadzenia()
    {    return $this->DataWprowadzenia;    }

    public function setDataWprowadzeniaNow()
    {    $this->DataWprowadzenia = new \DateTime();    }

    public function setDataWprowadzenia($dateTime)
    {    $this->DataWprowadzenia = new \DateTime($dateTime);    }

    public function getDataWycofania()
    {    return $this->DataWycofania;    }

    public function setDataDataWycofaniaNow()
    {    $this->DataWycofania = new \DateTime();    }

    public function setDataDataWycofania($dateTime)
    {    $this->DataWycofania = new \DateTime($dateTime);    }

    public function getIdProduktu()
    {    return $this->IdProduktu;    }

    public function setIdProduktu($IdProduktu)
    {    $this->IdProduktu = $IdProduktu;    }

    public function getIdVAT()
    {    return $this->IdVAT;    }

    public function setIdVAT($IdVAT)
    {    $this->IdVAT = $IdVAT;    }

}