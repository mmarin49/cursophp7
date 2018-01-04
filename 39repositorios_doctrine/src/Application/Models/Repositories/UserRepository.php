<?php
namespace Application\Models\Repositories;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    private $entity = 'Application\Models\Entities\User';

    public function  findByUsername($username)
    {
        return $this->_em->getRepository($this->entity)->findOneBy(["username" => $username]);
    }
}