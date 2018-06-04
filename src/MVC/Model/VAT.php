<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="vat")
 **/
class VAT
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $IdVAT;

    /** @Column(type="integer") **/
    protected $StawkaVAT;

    /** @Column(type="string") **/
    protected $Dotyczy;

    public function __construct ($StawkaVAT, $Dotyczy = null)
    {
        $this->StawkaVAT = $StawkaVAT;
        $this->Dotyczy   = $Dotyczy;
    }

    public function getIdVAT()
    {    return $this->IdVAT;    }

    public function getStawkaVAT()
    {    return $this->StawkaVAT;    }

    public function setStawkaVAT($StawkaVAT)
    {    $this->StawkaVAT = $StawkaVAT;    }

    public function getDotyczy()
    {    return $this->Dotyczy;    }

    public function setDotyczy($Dotyczy)
    {    $this->Dotyczy = $Dotyczy;    }

}