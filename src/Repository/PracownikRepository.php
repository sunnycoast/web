<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 2018-05-24
 * Time: 23:01
 */
namespace App\Repository;

use App\Entity\Pracownik;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PracownikRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pracownik::class);
    }
    /**
     * @param haslo
     * @return Pracownik[]
     */
    public function getPrac($haslo): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        //$qb = $this->createQueryBuilder('k')
        //    ->select('k.IdKategorii, k.NazwaKategorii, k.KolorKategorii')
        //    ->getQuery();
        //$qb = $em   ->getRepository('MVC\Model\PozycjaMenu')->createQueryBuilder('pm')
        //            ->select('p.IdKategorii, p.IdProduktu, p.NazwaProduktu, pm.CenaBrutto, p.Opis, v.StawkaVAT')
        //            ->innerJoin('MVC\Model\Produkt', 'p', 'WITH', 'pm.IdProduktu = p.IdProduktu')
        //            ->innerJoin('MVC\Model\VAT', 'v', 'WITH', 'pm.IdVAT = v.IdVAT')
        //            //->Where('p.IdKategorii < :id_k')
        //            //->setParameter('id_k',$id_k)
        //            ->getQuery();
        //$menu = ($qb->execute());
        $qb = $this->createQueryBuilder('pr')
            ->select('pr.PIN', 'os.Imie', 'rol.NazwaRoli')
            ->innerJoin('App\Entity\Osoba', 'os', 'WITH', 'pr.IdOsoby = os.IdOsoby')
            ->Where('pr.PIN = :haslo')
            ->setParameter(':haslo' , $haslo)
            ->innerJoin('App\Entity\Rola', 'rol', 'WITH', 'pr.IdRoli = rol.IdRoli')
            ->andWhere('pr.IdRoli = rol.IdRoli')
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }
}