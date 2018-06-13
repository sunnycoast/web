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
 * @ORM\Table(name="kategorie")
 * @ORM\Entity(repositoryClass="App\Repository\KategoriaRepository")
 **/
class Kategoria implements \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $IdKategorii;

    /** @ORM\Column(type="string") **/
    protected $NazwaKategorii;

    /** @ORM\Column(type="string") **/
    protected $KolorKategorii;

    public function __construct ($NazwaKategorii, $KolorKategorii = 'FFFFFF')
    {
        $this->NazwaKategorii = $NazwaKategorii;
        $this->KolorKategorii = $KolorKategorii;
    }

    public function getIdKategorii()
    {    return $this->IdKategorii;    }

    public function getNazwaKategorii()
    {    return $this->NazwaKategorii;    }

    public function setNazwaKategori($NazwaKategorii)
    {    $this->NazwaKategorii = $NazwaKategorii;    }

    public function getKolorKategorii()
    {    return $this->KolorKategorii;    }

    public function setKolorKategorii($KolorKategorii)
    {    $this->KolorKategorii = $KolorKategorii;    }


    public function serialize()
    {
        return serialize(array(
            $this->IdKategorii,
            $this->NazwaKategorii,
            $this->KolorKategorii,
            // see section on salt below
            // $this->salt,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->IdKategorii,
            $this->NazwaKategorii,
            $this->KolorKategorii,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }
}