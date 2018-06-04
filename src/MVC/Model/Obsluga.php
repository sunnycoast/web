<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="obsluga")
 **/
class Obsluga
{
    /**
     * @ManyToOne (targetEntity = "Rachunek")
     * @JoinColumn (name = "IdRachunku", referencedColumnName = "id")
     * @Id @Column(type="integer")
     */
    protected $IdRachunku;

    /**
     * @ManyToOne (targetEntity = "Pracownik")
     * @JoinColumn (name = "IdPracownika", referencedColumnName = "id")
     * @Column(type="integer")
     */
    protected $IdPracownika;


    public function __construct ($IdRachunku, $IdPracownika)
    {
        $this->IdRachunku  = $IdRachunku;
        $this->IdPracownika  = $IdPracownika;
    }

    public function getIdRachunkua()
    {    return $this->IdRachunku;    }

    public function getIdPracownika()
    {    return $this->IdPracownika;    }

    //Data przejścia (raczej nie, za dużo robpty za mało sensu)
    //Opis string(co robi generowny przez system)
    //IdBlokady integer key(np kelner może przyjąć i podać danie)
    //czy z tego się wtedy nie zrobi małe wysypisko
    
}