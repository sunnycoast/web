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
 * @ORM\Table(name="vat")
 * @ORM\Entity(repositoryClass="App\Repository\VATRepository")
 **/
class VAT implements \Serializable
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    protected $IdVAT;

    /** @ORM\Column(type="integer") **/
    protected $StawkaVAT;

    /** @ORM\Column(type="string") **/
    protected $Dotyczy;

    public function __construct ()
    {

    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdVAT,
            $this->StawkaVAT,
            $this->Dotyczy,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdVAT,
            $this->StawkaVAT,
            $this->Dotyczy,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }


    public function getIdVAT()
    {    return $this->IdVAT;    }

    public function getStawkaVAT()
    {    return $this->StawkaVAT;    }

    public function setStawkaVAT($StawkaVAT)
    {    $this->StawkaVAT = $StawkaVAT;    }

    public function getDotyczy()
    {    return $this->Dotyczy;    }

    public function setDotyczy($Dotyczy)
    {    $this->Dotyczy = $Dotyczy;    }

}