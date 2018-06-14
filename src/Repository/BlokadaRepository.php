<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 13:29
 */

namespace App\Repository;


use App\Entity\Blokada;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class BlokadaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Blokada::class);
    }

    /**
     * @return Blokada[]
     */
    public function findAll(): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('b')
            ->select('b.IdBlokady, b.DataWprowadzenia, b.DataWycofania, b.Powod, b.IdPozycjiMenu, b.IdPracownika')
            ->getQuery();
        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }


}