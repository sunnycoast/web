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
 * @ORM\Table(name="produkty")
 * @ORM\Entity(repositoryClass="App\Repository\ProduktRepository")
 **/
class Produkt implements \Serializable
{
    /** @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue **/
    protected $IdProduktu;

    /** @ORM\Column(type="string") */
    protected $NazwaProduktu;

    /** @ORM\Column(type="string") */
    protected $Przepis;

    /** @ORM\Column(type="string") */
    protected $Opis;

    /**
     * @ORM\ManyToOne (targetEntity = "Kategoria")
     * @ORM\JoinColumn (name = "IdKategorii", referencedColumnName = "id")
     * @ORM\Column(type="integer")
     */
    protected $IdKategorii;

//    public function __construct ($NazwaProduktu, $IdKategorii, $Opis = null, $Przepis = null)
//    {
//        $this->NazwaProduktu = $NazwaProduktu;
//        $this->IdKategorii   = $IdKategorii;
//        $this->Opis          = $Opis;
//        $this->Przepis       = $Przepis;
//    }

    public function __construct()
    {

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

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdProduktu,
            $this->NazwaProduktu,
            $this->Przepis,
            $this->Opis,
            $this->IdKategorii,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdProduktu,
            $this->NazwaProduktu,
            $this->Przepis,
            $this->Opis,
            $this->IdKategorii,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }
}