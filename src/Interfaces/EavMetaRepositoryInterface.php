<?php
namespace Aztektec\EAV\Interfaces;

use Aztektec\EAV\Dto\Meta\EavEntityTypeDto;
use Aztektec\EAV\Dto\Meta\EavAttributeDto;
use Aztektec\EAV\Dto\Meta\EavAttributeGroupDto;
use Aztektec\EAV\Dto\Meta\EavAttributeOptionDto;
use Aztektec\EAV\Dto\Meta\EavAttributesSetDto;
use Aztektec\EAV\Dto\Meta\EavRelationDto;
use Aztektec\EAV\Dto\Meta\EavRelationTypeDto;
use Aztektec\EAV\Dto\Meta\EavEntityAttributeGroupDto;
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 15/09/16
 * Time: 2:01
 */
interface EavMetaRepositoryInterface
{
    /**
     * @param $entity_type_id
     * @return mixed
     */
    public function getEntityType($entity_type_id);

    /**
     * @param EavEntityTypeDto $eavEntityTypeDto
     * @return mixed
     */
    public function saveEntityType(EavEntityTypeDto $eavEntityTypeDto);

    /**
     * @param $entity_type_id
     * @return mixed
     */
    public function deleteEntityType($entity_type_id);


    /**
     * @param $attribute_id
     * @return mixed
     */
    public function getAttribute($attribute_id);

    /**
     * @param EavAttributeDto $eavAttributeDto
     * @return mixed
     */
    public function saveAttribute(EavAttributeDto $eavAttributeDto);

    /**
     * @param $attribute_id
     * @return mixed
     */
    public function deleteAttribute($attribute_id);

    /**
     * @param $attribute_group_id
     * @return mixed
     */
    public function getAttributeGroup($attribute_group_id);

    /**
     * @param EavAttributeGroupDto $eavAttributeGroupDto
     * @return mixed
     */
    public function saveAttributeGroup(EavAttributeGroupDto $eavAttributeGroupDto);

    /**
     * @param $attribute_group_id
     * @return mixed
     */
    public function deleteAttributeGroup($attribute_group_id);
    /**
     * @param $attributes_set_id
     * @return mixed
     */
    public function getAttributesSet($attributes_set_id);

    /**
     * @param EavAttributesSetDto $eavAttributesSetDto
     * @return mixed
     */
    public function saveAttributesSet(EavAttributesSetDto $eavAttributesSetDto);

    /**
     * @param $attributes_set_id
     * @return mixed
     */
    public function deleteAttributesSet($attributes_set_id);
    
    /**
     * @param $entity_attribute_group_id
     * @return mixed
     */
    public function getEntityAttributeGroup($entity_attribute_group_id);

    /**
     * @param EavEntityAttributeGroupDto $eavEntityAttributeGroupDto
     * @return mixed
     */
    public function saveEntityAttributeGroup(EavEntityAttributeGroupDto $eavEntityAttributeGroupDto);

    /**
     * @param $entity_attribute_group_id
     * @return mixed
     */
    public function deleteEntityAttributeGroup($entity_attribute_group_id);

    /**
     * @param $relation_type_id
     * @return mixed
     */
    public function getRelationType($relation_type_id);

    /**
     * @param EavRelationTypeDto $eavRelationTypeDto
     * @return mixed
     */
    public function saveRelationType(EavRelationTypeDto $eavRelationTypeDto);

    /**
     * @param $relation_type_id
     * @return mixed
     */
    public function deleteRelationType($relation_type_id);

    /**
     * @param $attribute_option_id
     * @return mixed
     */
    public function getAttributeOption($attribute_option_id);

    /**
     * @param EavAttributeOptionDto $eavAttributeOptionDto
     * @return mixed
     */
    public function saveAttributeOption(EavAttributeOptionDto $eavAttributeOptionDto);

    /**
     * @param $attribute_option_id
     * @return mixed
     */
    public function deleteAttributeOption($attribute_option_id);

}