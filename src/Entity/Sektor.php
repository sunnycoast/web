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
 * @ORM\Table(name="sektory")
 * @ORM\Entity(repositoryClass="App\Repository\SektorRepository")
 **/
class Sektor implements \Serializable
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    protected $IdSektora;

    /** @ORM\Column(type="string") **/
    protected $NazwaSektora;

    /** @ORM\Column(type="boolean") **/
    protected  $Aktywny;

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdSektora,
            $this->NazwaSektora,
            $this->Aktywny,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdSektora,
            $this->NazwaSektora,
            $this->Aktywny,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }

    public function __construct ($NazwaSektora, $Aktywny = 0)
    {
        $this->NazwaSektora = $NazwaSektora;
        $this->Aktywny      = $Aktywny;
    }
    public function getIdSektora()
    {    return $this->IdSektora;    }

    public function getNazwaSektora()
    {    return $this->NazwaSektora;    }

    public function setNazwaSektora($NazwaSektora)
    {    $this->NazwaSektora = $NazwaSektora;    }

    public function getAktywny()
    {    return $this->Aktywny;    }

    public function setAktywny($Aktywny)
    {    $this->Aktywny = $Aktywny;    }

}