<?php

namespace MVC\Model;

/**
 * @Entity @Table(name="role")
 **/
class Rola
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $IdRoli;

    /** @Column(type="string") */
    protected $NazwaRoli;

    /** @Column(type="string") */
    protected $OpisRoli;

    public function getIdRoli()
    {    return $this->IdRoli;    }

    public function getNazwaRoli()
    {    return $this->NazwaRoli;    }

    public function setNazwaRoli($NazwaRoli)
    {    $this->NazwaRoli = $NazwaRoli;    }

    public function getOpisRoli()
    {    return $this->OpisRoli;    }

    public function setOpisRoli($OpisRoli)
    {    $this->OpisRoli = $OpisRoli;    }
    
}