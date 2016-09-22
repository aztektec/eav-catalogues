<?php
namespace Aztektec\EAV\Interfaces;

use Aztektec\EAV\Dto\EntityDto;
use Aztektec\EAV\Dto\AttributeDto;
use Aztektec\EAV\Dto\RelationDto;
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 15/09/16
 * Time: 2:17
 */
interface EavRepositoryInterface
{

    /**
     * @param $entity_type_id
     * @return mixed
     */
    public function getEntities($entity_type_id, $attribute_sort, $limit = 20, $offset = 0);
    /**
     * @param $entity_id
     * @return mixed
     */
    public function getEntity($entity_id, $entity_type_id);

    /**
     * @param EntityDto $entityDto
     * @return mixed
     */
    public function saveEntity(EntityDto $entityDto);

    /**
     * @param $attribute_id
     * @return mixed
     */
    public function getAttribute($entity_id, $attribute_id);

    /**
     * @param $entity_id
     * @param $entity_type_id
     * @return mixed
     */
    public function getEntityAttributes($entity_id, $entity_type_id);
    
    /**
     * @param AttributeDto $attributeDto
     * @return mixed
     */
    public function saveAttribute(AttributeDto $attributeDto);

    /**
     * @param $entity_id
     * @param $attribute_id
     * @return mixed
     */
    public function deleteAttribute($entity_id, $attribute_id);

    /**
     * @param $relation_id
     * @return mixed
     */
    public function getRelation($relation_id);

    /**
     * @param RelationDto $relationDto
     * @return mixed
     */
    public function saveRelation(RelationDto $relationDto);

    /**
     * @param $relation_id
     * @return mixed
     */
    public function deleteRelation($relation_id);


}