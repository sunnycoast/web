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
 * @ORM\Table(name="obsluga")
 * @ORM\Entity(repositoryClass="App\Repository\ObslugaRepository")
 **/
class Obsluga implements \Serializable
{
    /**
     * @ORM\ManyToOne (targetEntity = "Rachunek")
     * @ORM\JoinColumn (name = "IdRachunku", referencedColumnName = "id")
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $IdRachunku;

    /**
     * @ORM\ManyToOne (targetEntity = "Pracownik")
     * @ORM\JoinColumn (name = "IdPracownika", referencedColumnName = "id")

     * @ORM\Column(type="integer")
     */
    protected $IdPracownika;


    /** @ORM\Column(type="datetime") */
    protected $DataOtwarcia;


    public function __construct ($IdRachunku, $IdPracownika, $DataOtwarcia)
    {
        $this->IdRachunku  = $IdRachunku;
        $this->IdPracownika  = $IdPracownika;
        $this->DataOtwarcia  = $DataOtwarcia;
    }

    public function getIdRachunkua()
    {    return $this->IdRachunku;    }

    public function getIdPracownika()
    {    return $this->IdPracownika;    }

    public function getDataOtwarcia()
    {    return $this->DataOtwarcia;    }

    //Data przejścia (raczej nie, za dużo robpty za mało sensu)
    //Opis string(co robi generowny przez system)
    //IdBlokady integer key(np kelner może przyjąć i podać danie)
    //czy z tego się wtedy nie zrobi małe wysypisko

    public function serialize()
    {
        return serialize(array(
            $this->IdRachunku,
            $this->IdPracownika,
            $this->DataOtwarcia,
            // see section on salt below
            // $this->salt,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->IdRachunku,
            $this->IdPracownika,
            $this->DataOtwarcia,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }
}