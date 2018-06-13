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
 * @ORM\Table(name="StalyKlient")
 * @ORM\Entity(repositoryClass="App\Repository\StalyKlientRepository")
 */
class StalyKlient implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $IdStalegoKlienta;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $InformacjaHandlowa;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string")
     */
    protected $Znizka;

    /**
     * @ORM\ManyToOne (targetEntity = "Osoba")
     * @ORM\JoinColumn (name = "IdOsoby", referencedColumnName = "id")
     * @ORM\Column(type="integer")
     */
    protected $IdOsoby;

    public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getUsername()
    {
        return $this->IdStalegoKlienta;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdStalegoKlienta,
            $this->password,
            $this->InformacjaHandlowa,
            $this->Znizka,
            $this->IdOsoby,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdStalegoKlienta,
            $this->password,
            $this->InformacjaHandlowa,
            $this->Znizka,
            $this->IdOsoby,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }
}
