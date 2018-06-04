<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="produkty")
 **/
class Produkt
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $IdProduktu;

    /** @Column(type="string") */
    protected $NazwaProduktu;

    /** @Column(type="string") */
    protected $Przepis;

    /** @Column(type="string") */
    protected $Opis;

    /**
     * @ManyToOne (targetEntity = "Kategoria")
     * @JoinColumn (name = "IdKategorii", referencedColumnName = "id")
     * @Column(type="integer")
     */
    protected $IdKategorii;

    public function __construct ($NazwaProduktu, $IdKategorii, $Opis = null, $Przepis = null)
    {
        $this->NazwaProduktu = $NazwaProduktu;
        $this->IdKategorii   = $IdKategorii;
        $this->Opis          = $Opis;
        $this->Przepis       = $Przepis;
    }

    public function getIdProduktu()
    {    return $this->IdProduktu;    }

    public function getNazwaProduktu()
    {    return $this->NazwaProduktu;    }

    public function setNazwaProduktu($NazwaProduktu)
    {    $this->NazwaProduktu = $NazwaProduktu;    }

    public function getPrzepis()
    {    return $this->Przepis;    }

    public function setPrzepis($Przepis)
    {    $this->Przepis = $Przepis;    }

    public function getOpis()
    {    return $this->Opis;    }

    public function setOpis($Opis)
    {    $this->Opis = $Opis;    }

    public function getIdKategorii()
    {    return $this->IdKategorii;    }

    public function setIdKategorii($IdKategorii)
    {    $this->IdKategorii = $IdKategorii;    }

}