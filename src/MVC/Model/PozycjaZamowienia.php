<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="pozycje_zamowienia")
 **/
class PozycjaZamowienia
{
    /**
     * @ManyToOne (targetEntity = "Zamowienie")
     * @JoinColumn (name = "IdZamowienia", referencedColumnName = "id")
     * @Id @Column(type="integer")
     */
    protected $IdRachunku;

    /**
     * @ManyToOne (targetEntity = "PozycjaMenu")
     * @JoinColumn (name = "IdPozycjiMenu", referencedColumnName = "id")
     * @Id @Column(type="integer")
     */
    protected $IdPozycjiMenu;

    /** @Column(type="integer") */
    protected $LiczbaProduktow;

    /** @Column(type="string") */
    protected $StanRealizacji;

    public function __construct ($IdRachunku, $IdPozycjiMenu, $LiczbaProduktow = 1, $StanRealizacji = 1)
    {
        $this->IdRachunku     = $IdRachunku;
        $this->IdPozycjiMenu    = $IdPozycjiMenu;
        $this->LiczbaProduktow   = $LiczbaProduktow;
        $this->StanRealizacji   = $StanRealizacji;
    }

    //klucz łączony razem z stanem realizacji scalenie po dodojściu do (5)zrealizowane
    public function getIdZamowienia()
    {    return $this->IdRachunku;    }

    public function getIdPozycjiMenu()
    {    return $this->IdPozycjiMenu;    }

    public function getLiczbaProduktow()
    {    return $this->LiczbaProduktow;    }

    public function setLiczbaProduktow($LiczbaProduktow)
    {
        if ($LiczbaProduktow > 0)
            $this->LiczbaProduktow = $LiczbaProduktow;
    }

    public function addLiczbaProduktow($LiczbaProduktow)
    {
        $this->LiczbaProduktow += $LiczbaProduktow;
    }

    public function getStanRealizacjiName()
    {
        $StanRealizacji = $this->StanRealizacji;
        switch ($StanRealizacji)
        {
            case 0: $StanRealizacji = "W trakcie kompletowania";    break;
            case 1: $StanRealizacji = "Przekazane do realizacji";   break;
            case 2: $StanRealizacji = "W trakcie realizacji";       break;
            case 3: $StanRealizacji = "Czeka na kelnera";           break;
            case 4: $StanRealizacji = "W drodze";                   break;
            case 5: $StanRealizacji = "Zrealizowane";               break;
            default:$StanRealizacji = null;
        }
        return $StanRealizacji;
    }

    public function getStanRealizacji()
    {    return $this->StanRealizacji;    }

    public function setStanRealizacji($StanRealizacji)
    {
        if((0 <= $StanRealizacji) && (6 > $StanRealizacji))
            $this->StanRealizacji = $StanRealizacji;
    }

    public function nextStanRealizacji()
    {
        if(5 > $this->StanRealizacji)
            $this->StanRealizacji++;
    }

}