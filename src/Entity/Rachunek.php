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
 * @ORM\Table(name="rachunki")
 * @ORM\Entity(repositoryClass="App\Repository\RachunekRepository")
 **/
class Rachunek implements \Serializable
{
    /** @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue */
    protected $IdRachunku;

    /** @ORM\Column(type="string") */
    protected $NaImie;

    /** @ORM\Column(type="integer") */
    protected $LiczbaOsob;

    /** @ORM\Column(type="datetime") */
    protected $DataOtwarcia;

    /** @ORM\Column(type="string") */
    protected $Platnosc;

    /** @ORM\Column(type="datetime") */
    protected $DataZamkniecia;

    /** @ORM\Column(type="float") */
    protected $Znizka;

    /** @ORM\Column(type="string") */
    protected $UwagiPracownika;

    /** @ORM\Column(type="string") */
    protected $UwagiGoscia;

    /**
     * @ORM\ManyToOne (targetEntity = "Stolik")
     * @ORM\JoinColumn (name = "IdStolika", referencedColumnName = "id")
     * @ORM\Column(type="integer")
     */
    protected $IdStolika;

    /** @ORM\Column(type="integer") */
    protected $IdStalegoKlienta;

    public function __construct ($NaImie, $LiczbaOsob, $IdStolika, $Platnosc = '', $Znizka = 0, $IdStalegoKlienta = 0)
    {
        $this->NaImie           = $NaImie;
        $this->LiczbaOsob       = $LiczbaOsob;
        $this->IdStolika        = $IdStolika;
        $this->DataOtwarcia     = new \DateTime();
        $this->IdStalegoKlienta = $IdStalegoKlienta;
        $this->Platnosc = $Platnosc;
        $this->Znizka = $Znizka;
        $this->DataZamkniecia=new \DateTime("0000-00-00 00:00:00");
        $this->UwagiPracownika='';
        $this->UwagiGoscia='';
    }

    public function getZnizka()
    {    return $this->Znizka;    }

    public function setZnizka($Znizka)
    {    $this->Znizka = $Znizka;    }

    public function getPlatnosc()
    {    return $this->Platnosc;    }

    public function setPlatnosc($Platnosc)
    {    $this->Platnosc = $Platnosc;    }

    public function getIdRachunku()
    {    return $this->IdRachunku;    }

    public function getNaImie()
    {    return $this->NaImie;    }

    public function setNaImie($NaImie)
    {    $this->NaImie = $NaImie;    }

    public function getLiczbaOsob()
    {    return $this->LiczbaOsob;    }

    public function setLiczbaOsob($LiczbaOsob)
    {    $this->LiczbaOsob = $LiczbaOsob;    }

    public function getDataOtwarcia()
    {    return $this->DataOtwarcia;    }

    public function setDataOtwarciaNow()
    {    $this->DataOtwarcia = new \DateTime();    }

    public function setDataOtwarcia($dateTime)
    {    $this->DataOtwarcia = new \DateTime($dateTime);    }

    public function getDataZamkniecia()
    {    return $this->DataZamkniecia;    }

    public function setDataZamknieciaNow()
    {    $this->DataZamkniecia = new \DateTime();    }

    public function setDataZamkniecia($dateTime)
    {    $this->DataZamkniecia = new \DateTime($dateTime);    }

    public function getUwagiPracownika()
    {    return $this->UwagiPracownika;    }

    public function setUwagiPracownika($UwagiPracownika)
    {    $this->UwagiPracownika = $UwagiPracownika;    }

    public function getUwagiGoscia()
    {    return $this->UwagiGoscia;    }

    public function setUwagiGoscia($UwagiGoscia)
    {    $this->UwagiGoscia = $UwagiGoscia;    }

    public function getIdStolika()
    {    return $this->IdStolika;    }

    public function setIdStolika($IdStolika)
    {    $this->IdStolika = $IdStolika;    }

    public function getIdStalegoKlienta()
    {    return $this->IdStalegoKlienta;    }

    public function setIdStalegoKlienta($IdStalegoKlienta)
    {    $this->IdStalegoKlienta = $IdStalegoKlienta;    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdRachunku,
            $this->NaImie,
            $this->LiczbaOsob,
            $this->DataOtwarcia,
            $this->DataZamkniecia,
            $this->UwagiPracownika,
            $this->UwagiGoscia,
            $this->Platnosc,
            $this->Znizka,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdRachunku,
            $this->NaImie,
            $this->LiczbaOsob,
            $this->DataOtwarcia,
            $this->DataZamkniecia,
            $this->UwagiPracownika,
            $this->UwagiGoscia,
            $this->Platnosc,
            $this->Znizka,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }
}