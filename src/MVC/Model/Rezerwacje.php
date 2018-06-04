<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="rezerwacje")
 **/
class Rezerwacje
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $IdRezerwacji;

    /** @Column(type="datetime") */
    protected $DataRezerwacji;

    //true(1) wybrany przez gościa false(0)przyznany przez system
    /** @Column(type="boolean") */
    protected $StolikWybrany;

    /**
     * @ManyToOne (targetEntity = "Rachunek")
     * @Column(type="integer")
     */
    protected $IdRachunku;

    /**
     * @ManyToOne (targetEntity = "StalyKlient")
     * @Column(type="integer")
     */
    protected $IdStalegoKlienta;

    public function __construct ($DataRezerwacji, $IdRachunku, $IdStalegoKlienta, $StolikWybrany = 0)
    {
        $this->DataRezerwacji   = new \DateTime($DataRezerwacji);
        $this->StolikWybrany    = $StolikWybrany;
        $this->IdRachunku       = $IdRachunku;
        $this->IdStalegoKlienta = $IdStalegoKlienta;
    }

    public function getIdRezerwacji()
    {    return $this->IdRezerwacji;    }

    public function getDataRezerwacji()
    {    return $this->DataRezerwacji;    }

    public function setDataRezerwacji($dateTime)
    {    $this->DataRezerwacji = new \DateTime($dateTime);    }

    public function getStolikWybrany()
    {    return $this->StolikWybrany;    }

    public function getIdRachunku()
    {    return $this->IdRachunku;    }

    public function getIdStalegoKlienta()
    {    return $this->IdStalegoKlienta;    }

}