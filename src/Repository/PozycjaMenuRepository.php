<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 2018-05-24
 * Time: 23:01
 */
namespace App\Repository;

use App\Entity\PozycjaMenu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PozycjaMenuRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PozycjaMenu::class);
    }
    /**
     * @return PozycjaMenu[]
     */
    public function getAll(): array
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
        $qb = $this->createQueryBuilder('pm')
            ->select('p.IdKategorii, p.IdProduktu, p.NazwaProduktu, pm.CenaBrutto, p.Opis, v.StawkaVAT')
                    ->innerJoin('App\Entity\Produkt', 'p', 'WITH', 'pm.IdProduktu = p.IdProduktu')
                    ->innerJoin('App\Entity\VAT', 'v', 'WITH', 'pm.IdVAT = v.IdVAT')
                    ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }
}