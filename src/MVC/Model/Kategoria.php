<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="kategorie")
 **/
class Kategoria
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $IdKategorii;

    /** @Column(type="string") **/
    protected $NazwaKategorii;

    /** @Column(type="string") **/
    protected $KolorKategorii;

    public function __construct ($NazwaKategorii, $KolorKategorii = 'FFFFFF')
    {
        $this->NazwaKategorii = $NazwaKategorii;
        $this->KolorKategorii = $KolorKategorii;
    }

    public function getIdKategorii()
    {    return $this->IdKategorii;    }

    public function getNazwaKategorii()
    {    return $this->NazwaKategorii;    }

    public function setNazwaKategori($NazwaKategorii)
    {    $this->NazwaKategorii = $NazwaKategorii;    }

    public function getKolorKategorii()
    {    return $this->KolorKategorii;    }

    public function setKolorKategorii($KolorKategorii)
    {    $this->KolorKategorii = $KolorKategorii;    }

}