<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 2018-05-24
 * Time: 23:01
 */
namespace App\Repository;

use App\Entity\StalyKlient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class StalyKlientRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StalyKlient::class);
    }
    /**
     * @param haslo
     * @param email
     * @return StalyKlient[]
     */
    public function getKlient($haslo, $email): array
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
        $qb = $this->createQueryBuilder('sk')
            ->select('sk.Haslo', 'os.Email', 'os.Imie')
            ->innerJoin('App\Entity\Osoba', 'os', 'WITH', 'sk.IdOsoby = os.IdOsoby')
            ->Where('sk.Haslo = :haslo AND os.Email=:email')
            ->setParameters([':haslo' => $haslo, ':email' => $email])
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }
}