<?php
namespace Aztektec\EAV;
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 15/09/16
 * Time: 1:29
 */
class EavModel
{
    /**
     * @var EavRepositoryInterface
     */
    protected $eavRepositoryInterface;

    public function __construct(EavRepositoryInterface $eavRepositoryInterface)
    {
        $this->eavRepositoryInterface = $eavRepositoryInterface;
    }

    public function getEntity($entity_id, $entity_type_id)
    {
        /** @var \Aztektec\EAV\Dto\EntityDto $entity */
        $entity = $this->eavRepositoryInterface->getEntity($entity_id, $entity_type_id);

        $entity->setAttributes($this->eavRepositoryInterface->getAttributes($entity_id, $entity_type_id));
        
    }
}