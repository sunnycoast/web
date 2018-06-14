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
 * @ORM\Table(name="rezerwacje")
 * @ORM\Entity(repositoryClass="App\Repository\RezerwacjeRepository")
 **/
class Rezerwacje implements \Serializable
{
    /** @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue */
    protected $IdRezerwacji;

    /** @ORM\Column(type="datetime") */
    protected $DataRezerwacji;

    //true(1) wybrany przez gościa false(0)przyznany przez system
    /** @ORM\Column(type="boolean") */
    protected $StolikWybrany;

    /**
     * @ORM\ManyToOne (targetEntity = "Rachunek")
     * @ORM\Column(type="integer")
     */
    protected $IdRachunku;

    /**
     * @ORM\ManyToOne (targetEntity = "StalyKlient")
     * @ORM\Column(type="integer")
     */
    protected $IdStalegoKlienta;

//    public function __construct ($DataRezerwacji, $IdRachunku, $IdStalegoKlienta, $StolikWybrany = 0)
//    {
//        $this->DataRezerwacji   = new \DateTime($DataRezerwacji);
//        $this->StolikWybrany    = $StolikWybrany;
//        $this->IdRachunku       = $IdRachunku;
//        $this->IdStalegoKlienta = $IdStalegoKlienta;
//    }

    public function __construct()
    {

    }

    public function getIdRezerwacji()
    {    return $this->IdRezerwacji;    }

    public function getDataRezerwacji()
    {    return $this->DataRezerwacji;    }

    public function setDataRezerwacji($dateTime)
    {    $this->DataRezerwacji = new \DateTime($dateTime);    }

    public function getStolikWybrany()
    {    return $this->StolikWybrany;    }

    public function getIdRachunku()
    {    return $this->IdRachunku;    }

    public function getIdStalegoKlienta()
    {    return $this->IdStalegoKlienta;    }

    /**
     * @param mixed $IdRachunku
     */
    public function setIdRachunku($IdRachunku): void
    {
        $this->IdRachunku = $IdRachunku;
    }

    /**
     * @param mixed $IdStalegoKlienta
     */
    public function setIdStalegoKlienta($IdStalegoKlienta): void
    {
        $this->IdStalegoKlienta = $IdStalegoKlienta;
    }

    /**
     * @param mixed $IdRezerwacji
     */
    public function setIdRezerwacji($IdRezerwacji): void
    {
        $this->IdRezerwacji = $IdRezerwacji;
    }

    /**
     * @param mixed $StolikWybrany
     */
    public function setStolikWybrany($StolikWybrany): void
    {
        $this->StolikWybrany = $StolikWybrany;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdRezerwacji,
            $this->DataRezerwacji,
            $this->StolikWybrany,
            $this->IdRachunku,
            $this->IdStalegoKlienta,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdRezerwacji,
            $this->DataRezerwacji,
            $this->StolikWybrany,
            $this->IdRachunku,
            $this->IdStalegoKlienta,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }
}