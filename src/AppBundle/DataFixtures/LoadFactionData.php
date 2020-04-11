<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Faction;
use AppBundle\Services\DataimportFileLocator;

/**
 * Class LoadFactionData
 * @package AppBundle\DataFixtures\ORM
 */
class LoadFactionData extends AbstractFixture
{
    public function __construct(DataimportFileLocator $dataimportFileLocator)
    {
        parent::__construct($dataimportFileLocator, 'faction');
    }

    /**
     * @return Faction
     */
    protected function createEntity()
    {
        return new Faction();
    }

    /**
     * @param Faction $entity
     * @param array $data
     * @return Faction
     */
    protected function populateEntity($entity, array $data)
    {
        // `id`,`code`,`name`,`is_primary`,`octgn_id`
        $entity->setId($data[0]);
        $entity->setCode($data[1]);
        $entity->setName($data[2]);
        $entity->setIsPrimary((bool) $data[3]);
        $entity->setOctgnId($data[4]);
        return $entity;
    }
}
