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
 * @ORM\Table(name="blokady")
 * @ORM\Entity(repositoryClass="App\Repository\BlokadaRepository")
 **/
class Blokada implements \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $IdBlokady;

    /** @ORM\Column(type="integer") */
    protected $DataWprowadzenia;

    /** @ORM\Column(type="datetime") */
    protected $DataWycofania;

    /** @ORM\Column(type="string") */
    protected $Powod;

    /**
     * @ORM\ManyToOne (targetEntity = "PozycjaMenu")
     * @ORM\JoinColumn (name = "IdPozycjiMenu", referencedColumnName = "id")
     * @ORM\Column(type="integer")
     */
    protected $IdPozycjiMenu;

    /**
     * @ORM\ManyToOne (targetEntity = "Pracownik")
     * @ORM\JoinColumn (name = "IdPracownika", referencedColumnName = "id")
     * @ORM\Column(type="integer")
     */
    protected $IdPracownika;


//    public function __construct ($Powod, $IdPozycjiMenu, $DataWycofania = null, $DataWprowadzenia = null)
//    {
//        if(is_null($DataWprowadzenia))
//        {    $this->DataWprowadzenia = new \DateTime();    }
//        else
//        {    $this->DataWprowadzenia = new \DateTime($DataWprowadzenia);    }
//
//        if(is_null($DataWycofania))
//        //następny dzień
//        {    $this->DataWycofania = new \DateTime();    }
//        else
//        {    $this->DataWycofania = new \DateTime($DataWycofania);    }
//
//        $this->Powod   = $Powod;
//        $this->IdPozycjiMenu    = $IdPozycjiMenu;
//    }

//    public function __construct ($Powod, $IdPozycjiMenu, $DataWycofania, $DataWprowadzenia,$IdPracownika,$IdBlokady)
//    {
//        $this->Powod   = $Powod;
//        $this->IdPozycjiMenu    = $IdPozycjiMenu;
//        $this->DataWycofania   = $DataWycofania;
//        $this->DataWprowadzenia    = $DataWprowadzenia;
//        $this->IdPracownika   = $IdPracownika;
//        $this->IdBlokady    = $IdBlokady;
//    }

    public function __construct()
    {

    }

    /**
     * @param mixed $DataWycofania
     */
    public function setDataWycofania($DataWycofania)
    {
        $this->DataWycofania = $DataWycofania;
    }

    /**
     * @param mixed $IdBlokady
     */
    public function setIdBlokady($IdBlokady): void
    {
        $this->IdBlokady = $IdBlokady;
    }

    /**
     * @param mixed $IdPozycjiMenu
     */
    public function setIdPozycjiMenu($IdPozycjiMenu)
    {
        $this->IdPozycjiMenu = $IdPozycjiMenu;
    }

    /**
     * @param mixed $IdPracownika
     */
    public function setIdPracownika($IdPracownika)
    {
        $this->IdPracownika = $IdPracownika;
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

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdBlokady,
            $this->DataWprowadzenia,
            $this->DataWycofania,
            $this->Powod,
            $this->IdPozycjiMenu,
            $this->IdPracownika,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdBlokady,
            $this->DataWprowadzenia,
            $this->DataWycofania,
            $this->Powod,
            $this->IdPozycjiMenu,
            $this->IdPracownika,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }

}