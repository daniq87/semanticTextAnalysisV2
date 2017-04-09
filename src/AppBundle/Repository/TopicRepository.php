<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TopicRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TopicRepository extends EntityRepository {

    public function findAllOrderedByName() {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT t FROM AppBundle:Topic t ORDER BY t.name ASC'
                        )
                        ->getResult();
    }

    /**
     * Return topics filtered by name(like)
     * @param String $name
     * @return Topic
     */
    public function findLikeName($name) {

        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT t FROM AppBundle:Topic t WHERE t.name LIKE :filter ORDER BY t.name ASC'
                        )->setParameter('filter', '%' . $name . '%')
                        ->getResult();
    }

}
