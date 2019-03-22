<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18/12/2018
 * Time: 23:45
 */

namespace EntityBundle\Repository;
use EntityBundle\Entity\Produit;


class ProduitRepository extends \Doctrine\ORM\EntityRepository
{

    public function findAllNew()
    {
        $dql = 'SELECT  p FROM EntityBundle\Entity\Produit p  ORDER BY p.date DESC';
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute();
    }


    public function findAllBestSeller()
    {
        $dql = 'SELECT  p FROM EntityBundle\Entity\Produit p  ORDER BY p.nbr_vente DESC';
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute();
    }


    public function findAllSideBar()
    {
        $dql = 'SELECT art FROM Front\BonPlanBundle\Entity\Article art where art.etat = :etat ORDER BY art.date DESC ';
        $query = $this->getEntityManager()->createQuery($dql)->setParameter('etat', 'publié')->setMaxResults(3);

        return $query->execute();
    }

    public function findArray($array)
    {
        $qb = $this->createQueryBuilder('p')
            ->Select('p')
            ->Where('p.id IN (:array)')
            ->setParameter('array', $array);
        return $qb->getQuery()->getResult();

    }




}