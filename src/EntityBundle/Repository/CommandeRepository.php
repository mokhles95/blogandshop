<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18/12/2018
 * Time: 23:32
 */

namespace EntityBundle\Repository;


class CommandeRepository extends \Doctrine\ORM\EntityRepository
{
public function Confirmer($id)
{ $et="livrée";
    $qb= $this->createQueryBuilder('c')
        ->update('EntityBundle:Commande','c')
        ->set('c.etat ', ':et')
        ->where('c.id = :id')
        ->setParameter('id',$id)
    ->setParameter('et',$et);

    return $qb->getQuery()->getResult();
}

    public function findAddresses($id)
    {

        $qb= $this->createQueryBuilder('c')
           ->select("c.address")
            ->where('c.user = :id')
            ->setParameter('id',$id)
           ;

        return $qb->getQuery()->getResult();



       /* $dql = 'SELECT address FROM Commande where user= :c  ';
        $query = $this->getEntityManager()->createQuery($dql)->setParameter('c', $id);

        return $query->execute();*/
    }


}