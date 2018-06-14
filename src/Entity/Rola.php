<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 2018-05-11
 * Time: 00:38
 */
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="App\Repository\RolaRepository")
 **/
class Rola implements \Serializable
{
    /** @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue */
    protected $IdRoli;

    /** @ORM\Column(type="string") */
    protected $NazwaRoli;

    /** @ORM\Column(type="string") */
    protected $OpisRoli;

    public function __construct()
    {

    }

    /** @see \Serializable::serialize() */
    public function serialize()
{
    return serialize(array(
        $this->IdRoli,
        $this->NazwaRoli,
        $this->OpisRoli,
        // see section on salt below
        // $this->salt,
    ));
}

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
{
    list (
        $this->IdRoli,
        $this->NazwaRoli,
        $this->OpisRoli,
        // see section on salt below
        // $this->salt
        ) = unserialize($serialized, ['allowed_classes' => false]);
}

    public function getIdRoli()
    {    return $this->IdRoli;    }

    /**
     * @param mixed $IdRoli
     */
    public function setIdRoli($IdRoli): void
    {
        $this->IdRoli = $IdRoli;
    }

    public function getNazwaRoli()
    {    return $this->NazwaRoli;    }

    public function setNazwaRoli($NazwaRoli)
    {    $this->NazwaRoli = $NazwaRoli;    }

    public function getOpisRoli()
    {    return $this->OpisRoli;    }

    public function setOpisRoli($OpisRoli)
    {    $this->OpisRoli = $OpisRoli;    }
    
}