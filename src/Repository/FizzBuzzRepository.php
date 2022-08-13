<?php

namespace App\Repository;

use App\Entity\FizzBuzz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FizzBuzz|null find($id, $lockMode = null, $lockVersion = null)
 * @method FizzBuzz|null findOneBy(array $criteria, array $orderBy = null)
 * @method FizzBuzz[]    findAll()
 * @method FizzBuzz[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FizzBuzz::class);
    }
}
