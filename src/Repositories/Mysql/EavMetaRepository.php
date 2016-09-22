<?php
namespace Aztektec\EAV\Repositories\Mysql;
use Aztektec\EAV\Dto\AttributeDto;
use Aztektec\EAV\Dto\Meta\EavAttributeGroupDto;
use Aztektec\EAV\Dto\Meta\EavAttributesSetDto;

/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 21/09/16
 * Time: 23:34
 */
class EavMetaRepository
{
    /**
     * 
     */
    public function getEntityAttribute($entity_type_id, $attribute_id){}

    /**
     * 
     */
    public function saveEntityAttribute(AttributeDto $attribute){}

    /**
     * 
     */
    public function deleteEntityAttribute($entity_type_id, $attribute_id){}

    /**
     * 
     */
    public function getAttributeGroup($attribute_group_id){}

    /**
     * 
     */
    public function saveAttributeGroup(EavAttributeGroupDto $attributeGroup){}

    /**
     * 
     */
    public function deleteAttributeGroup($attribute_group_id){}

    /**
     * 
     */
    public function insertAttributeGroup(EavAttributeGroupDto $attributeGroup){}

    /**
     * 
     */
    public function updateAttributeGroup(EavAttributeGroupDto $attributeGroupDto){}

    /**
     * 
     */
    public function getEntityAttributesSet($entity_attribute_set){}

    /**
     * 
     */
    public function saveEntityAttributesSet(EavAttributesSetDto $attributesSet){}

    /**
     * 
     */
    public function deleteEntityAttributesSet($entity_attributes_set_id){}

    /**
     * 
     */
    public function insertEntityAttributesSet(EavAttributesSetDto $attributesSet){}

    /**
     * 
     */
    public function updateEntityAttributesSet(EavAttributesSetDto $attributesSet){}

    /**
     * 
     */
    public function getEntityAttributeGroup(){}

    /**
     * 
     */
    public function saveEntityAttributeGroup(){}

    /**
     * 
     */
    public function deleteEntityAttributeGroup(){}

    /**
     * 
     */
    public function insertEntityAttributeGroup(){}

    /**
     * 
     */
    public function updateEntityAttributeGroup(){}

    /**
     * 
     */
    public function getEntityTypeDto(){}

    /**
     * 
     */
    public function saveEntityTypeDto(){}

    /**
     * 
     */
    public function deleteEntityTypeDto(){}

    /**
     * 
     */
    public function insertEntityTypeDto(){}

    /**
     * 
     */
    public function updateEntityTypeDto(){}

    /**
     * 
     */
    public function getRelationType(){}

    /**
     * 
     */
    public function saveRelationType(){}

    /**
     * 
     */
    public function deleteRelationType(){}

    /**
     * 
     */
    public function insertRelationType(){}

    /**
     * 
     */
    public function updateRelationType(){}
}