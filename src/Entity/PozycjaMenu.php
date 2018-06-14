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
 * @ORM\Table(name="pozycje_menu")
 * @ORM\Entity(repositoryClass="App\Repository\PozycjaMenuRepository")
 **/
class PozycjaMenu implements \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $IdPozycjiMenu;

    /** @ORM\Column(type="float") */
    protected $CenaBrutto;

    /** @ORM\Column(type="datetime") */
    protected $DataWprowadzenia;

    /** @ORM\Column(type="datetime") */
    protected $DataWycofania;

    /**
     * @ORM\ManyToOne (targetEntity = "Produkt")
     * @ORM\JoinColumn (name = "IdProduktu", referencedColumnName = "id")
     * @ORM\Column(type="integer")
     */
    protected $IdProduktu;

    /**
     * @ORM\ManyToOne (targetEntity = "VAT")
     * @ORM\JoinColumn (name = "IdVAT", referencedColumnName = "id")
     * @ORM\Column(type="integer")
     */
    protected $IdVAT;

//    public function __construct ($CenaBrutto, $DataWprowadzenia, $IdProduktu, $IdVAT, $DataWycofania = null)
//    {
//        $this->CenaBrutto       = $CenaBrutto;
//        $this->DataWprowadzenia = $DataWprowadzenia;
//        $this->IdProduktu       = $IdProduktu;
//        $this->IdVAT            = $IdVAT;
//
//        if(!is_null($DataWycofania))
//        {    $this->DataWprowadzenia = new \DateTime($DataWycofania);    }
//    }

    public function __construct()
    {

    }

    public function getIdPozycjiMenu()
    {    return $this->IdProduktu;    }

    public function getCenaBrutto()
    {    return $this->CenaBrutto;    }

    public function setCenaBrutto($CenaBrutto)
    {    $this->CenaBrutto = $CenaBrutto;    }

    public function getDataWprowadzenia()
    {    return $this->DataWprowadzenia;    }

    public function setDataWprowadzeniaNow()
    {    $this->DataWprowadzenia = new \DateTime();    }

//    public function setDataWprowadzenia($dateTime)
//    {    $this->DataWprowadzenia = new \DateTime($dateTime);    }

    /**
     * @param mixed $DataWprowadzenia
     */
    public function setDataWprowadzenia($DataWprowadzenia): void
    {
        $this->DataWprowadzenia = $DataWprowadzenia;
    }

    /**
     * @param mixed $DataWycofania
     */
    public function setDataWycofania($DataWycofania): void
    {
        $this->DataWycofania = $DataWycofania;
    }

    /**
     * @param mixed $IdPozycjiMenu
     */
    public function setIdPozycjiMenu($IdPozycjiMenu): void
    {
        $this->IdPozycjiMenu = $IdPozycjiMenu;
    }

    public function getDataWycofania()
    {    return $this->DataWycofania;    }

    public function setDataDataWycofaniaNow()
    {    $this->DataWycofania = new \DateTime();    }

    public function setDataDataWycofania($dateTime)
    {    $this->DataWycofania = new \DateTime($dateTime);    }

    public function getIdProduktu()
    {    return $this->IdProduktu;    }

    public function setIdProduktu($IdProduktu)
    {    $this->IdProduktu = $IdProduktu;    }

    public function getIdVAT()
    {    return $this->IdVAT;    }

    public function setIdVAT($IdVAT)
    {    $this->IdVAT = $IdVAT;    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdPozycjiMenu,
            $this->CenaBrutto,
            $this->DataWprowadzenia,
            $this->DataWycofania,
            $this->IdProduktu,
            $this->IdVAT,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdPozycjiMenu,
            $this->CenaBrutto,
            $this->DataWprowadzenia,
            $this->DataWycofania,
            $this->IdProduktu,
            $this->IdVAT,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }
}