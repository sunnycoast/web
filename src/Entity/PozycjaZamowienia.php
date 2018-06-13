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
 * @ORM\Table(name="pozycje_zamowienia")
 * @ORM\Entity(repositoryClass="App\Repository\PozycjaZamowieniaRepository")
 **/
class PozycjaZamowienia implements \Serializable
{
    /**
     * @ORM\ManyToOne (targetEntity = "Zamowienie")
     * @ORM\JoinColumn (name = "IdZamowienia", referencedColumnName = "id")
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $IdZamowienia;

    /**
     * @ORM\ManyToOne (targetEntity = "PozycjaMenu")
     * @ORM\JoinColumn (name = "IdPozycjiMenu", referencedColumnName = "id")
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $IdPozycjiMenu;

    /** @ORM\Column(type="integer") */
    protected $LiczbaProduktow;

    /** @ORM\Column(type="string") */
    protected $StanRealizacji;

    public function __construct ($IdZamowienia, $IdPozycjiMenu, $LiczbaProduktu = 1, $StanRealizacji = 1)
    {
        $this->IdZamowienia     = $IdZamowienia;
        $this->IdPozycjiMenu    = $IdPozycjiMenu;
        $this->LiczbaProduktu   = $LiczbaProduktu;
        $this->StanRealizacji   = $StanRealizacji;
    }

    //klucz łączony razem z stanem realizacji scalenie po dodojściu do (5)zrealizowane
    public function getIdZamowienia()
    {    return $this->IdZamowienia;    }

    public function getIdPozycjiMenu()
    {    return $this->IdPozycjiMenu;    }

    public function getLiczbaProduktow()
    {    return $this->LiczbaProduktow;    }

    public function setLiczbaProduktow($LiczbaProduktow)
    {
        if ($LiczbaProduktow > 0)
            $this->LiczbaProduktow = $LiczbaProduktow;
    }

    public function getStanRealizacjiName()
    {
        $StanRealizacji = $this->StanRealizacji;
        switch ($StanRealizacji)
        {
            case 0: $StanRealizacji = "W trakcie kompletowania";    break;
            case 1: $StanRealizacji = "Przekazane do realizacji";   break;
            case 2: $StanRealizacji = "W trakcie realizacji";       break;
            case 3: $StanRealizacji = "Czeka na kelnera";           break;
            case 4: $StanRealizacji = "W drodze";                   break;
            case 5: $StanRealizacji = "Zrealizowane";               break;
            default:$StanRealizacji = null;
        }
        return $StanRealizacji;
    }

    public function getStanRealizacji()
    {    return $this->StanRealizacji;    }

    public function setStanRealizacji($StanRealizacji)
    {
        if((0 <= $StanRealizacji) && (6 > $StanRealizacji))
            $this->StanRealizacji = $StanRealizacji;
    }

    public function nextStanRealizacji()
    {
        if(5 > $this->StanRealizacji)
            $this->StanRealizacji++;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdZamowienia,
            $this->IdPozycjiMenu,
            $this->LiczbaProduktu,
            $this->StanRealizacji,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdZamowienia,
            $this->IdPozycjiMenu,
            $this->LiczbaProduktu,
            $this->StanRealizacji,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }

}