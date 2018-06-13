<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 2018-05-18
 * Time: 08:13
 */

namespace App\Repository;

use App\Entity\Stolik;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class StolikRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Stolik::class);
    }

    /**
     * @return Stolik[]
     */
    public function findAll(): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query

        $qb = $this->createQueryBuilder('st')
        ->select('st.IdStolika, st.LiczbaMiejsc, se.IdSektora,  se.NazwaSektora, se.Aktywny')
        ->innerJoin('App\Entity\Sektor', 'se', 'WITH', 'st.IdSektora = se.IdSektora')
        ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }
    /**
     * @param k_stol
     * @return Stolik[]
     */
    public function findStol($k_stol): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query

        $qb = $this->createQueryBuilder('st')
            ->select('st.IdStolika, st.LiczbaMiejsc,  se.NazwaSektora, se.Aktywny')
            ->innerJoin('App\Entity\Sektor', 'se', 'WITH', 'st.IdSektora = se.IdSektora')
            ->Where('st.KodStolika = :k_stol')
            ->setParameter('k_stol', $k_stol)
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }

}