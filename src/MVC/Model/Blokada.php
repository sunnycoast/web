<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="blokady")
 **/
class Blokada
{
    /** @Id @Column(type="integer") @GeneratedValue*/
    protected $IdBlokady;

    /** @Column(type="integer") */
    protected $DataWprowadzenia;

    /** @Column(type="datetime") */
    protected $DataWycofania;

    /** @Column(type="string") */
    protected $Powod;

    /**
     * @ManyToOne (targetEntity = "PozycjaMenu")
     * @JoinColumn (name = "IdPozycjiMenu", referencedColumnName = "id")
     * @Column(type="integer")
     */
    protected $IdPozycjiMenu;

    /**
     * @ManyToOne (targetEntity = "Pracownik")
     * @JoinColumn (name = "IdPracownika", referencedColumnName = "id")
     * @Column(type="integer")
     */
    protected $IdPracownika;


    public function __construct ($Powod, $IdPozycjiMenu, $DataWycofania = null, $DataWprowadzenia = null)
    {
        if(is_null($DataWprowadzenia))
        {    $this->DataWprowadzenia = new \DateTime();    }
        else
        {    $this->DataWprowadzenia = new \DateTime($DataWprowadzenia);    }

        if(is_null($DataWycofania))
        //następny dzień
        {    $this->DataWycofania = new \DateTime();    }
        else
        {    $this->DataWycofania = new \DateTime($DataWycofania);    }

        $this->Powod   = $Powod;
        $this->IdPozycjiMenu    = $IdPozycjiMenu;
    }

    public function getIdBlokady()
    {    return $this->IdBlokady;    }

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

    public function getPowod()
    {    return $this->Powod;    }

    public function setPowod($Powod)
    {    $this->Powod = $Powod;    }

    public function getIdPozycjiMenu()
    {    return $this->IdPozycjiMenu;    }

    public function getIdPracownika()
    {    return $this->IdPracownika;    }

}