<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 2018-05-18
 * Time: 08:13
 */

namespace App\Repository;

use App\Entity\Kategoria;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class KategoriaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Kategoria::class);
    }

    /**
     * @return Kategoria[]
     */
    public function findAll(): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('k')
            ->select('k.IdKategorii, k.NazwaKategorii, k.KolorKategorii')
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }
}