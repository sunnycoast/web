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
 * @ORM\Table(name="stoliki")
 * @ORM\Entity(repositoryClass="App\Repository\StolikRepository")
 **/
class Stolik implements \Serializable
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    protected $IdStolika;

    /** @ORM\Column(type="string") **/
    protected $NazwaStolika;

    /** @ORM\Column(type="string") **/
    protected $KodStolika;

    /** @ORM\Column(type="integer") **/
    protected $LiczbaMiejsc;

    /** @ORM\Column(type="boolean") **/
    protected $Zajety;

    /**
     * @ORM\ManyToOne (targetEntity = "Sektor")
     * @ORM\JoinColumn (name = "IdSektora", referencedColumnName = "id")
     * @ORM\Column(type="integer")
     */
    protected $IdSektora;

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->IdStolika,
            $this->NazwaStolika,
            $this->KodStolika,
            $this->LiczbaMiejsc,
            $this->Zajety,
            $this->IdSektora,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->IdStolika,
            $this->NazwaStolika,
            $this->KodStolika,
            $this->LiczbaMiejsc,
            $this->Zajety,
            $this->IdSektora,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }

//    public function __construct ($NazwaStolika, $KodStolika, $IdSektora, $LiczbaMiejsc = 2, $Zajety = 0)
//    {
//        $this->NazwaStolika = $NazwaStolika;
//        $this->KodStolika   = $KodStolika;
//        $this->IdSektora    = $IdSektora;
//        $this->LiczbaMiejsc = $LiczbaMiejsc;
//        $this->Zajety       = $Zajety;
//    }

    public function __construct()
    {

    }

    /**
     * @param mixed $IdStolika
     */
    public function setIdStolika($IdStolika): void
    {
        $this->IdStolika = $IdStolika;
    }

    public function getIdStolika()
    {    return $this->IdStolika;    }

    public function getNazwaStolika()
    {    return $this->NazwaStolika;    }

    public function setNazwaStolika($NazwaStolika)
    {    $this->NazwaStolika = $NazwaStolika;    }

    public function getKodStolika()
    {    return $this->KodStolika;    }

    public function setKodStolika($KodStolika)
    {    $this->KodStolika = $KodStolika;    }

    public function getLiczbaMiejsc()
    {    return $this->LiczbaMiejsc;    }

    public function setLiczbaMiejsc($LiczbaMiejsc)
    {    $this->LiczbaMiejsc = $LiczbaMiejsc;    }

    public function getZajety()
    {    return $this->Zajety;    }

    public function setZajety($Zajety)
    {    $this->Zajety = $Zajety;    }

    public function getIdSektora()
    {    return $this->IdSektora;    }

    public function setIdSektora($IdSektora)
    {    $this->IdSektora = $IdSektora;    }

}