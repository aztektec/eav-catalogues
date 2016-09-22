<?php

namespace Aztektec\EAV\Dto;
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 12/09/16
 * Time: 0:10
 */
class EntityDto
{
    /**
     * @var
     */
    protected $entity_id;

    /**
     * @var
     */
    protected $entity_type_id;

    /**
     * @var
     */
    protected $entity_parent;

    /**
     * @var
     */
    protected $entity_attributes_set_id;

    /**
     * @var
     */
    protected $entity_unique_string_key;

    /**
     * @var
     */
    protected $entity_created_at;

    /**
     * @var
     */
    protected $entity_updated_at;

    /**
     * @var
     */
    protected $entity_active;

    /**
     * @var
     */
    protected $attributes;

    /**
     * @return mixed
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * @param mixed $entity_id
     * @return EntitiesDto
     */
    public function setEntityId($entity_id)
    {
        $this->entity_id = $entity_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityTypeId()
    {
        return $this->entity_type_id;
    }

    /**
     * @param mixed $entity_type_id
     * @return EntitiesDto
     */
    public function setEntityTypeId($entity_type_id)
    {
        $this->entity_type_id = $entity_type_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityParent()
    {
        return $this->entity_parent;
    }

    /**
     * @param mixed $entity_parent
     * @return EntitiesDto
     */
    public function setEntityParent($entity_parent)
    {
        $this->entity_parent = $entity_parent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityAttributesSetId()
    {
        return $this->entity_attributes_set_id;
    }

    /**
     * @param mixed $entity_attributes_set_id
     * @return EntitiesDto
     */
    public function setEntityAttributesSetId($entity_attributes_set_id)
    {
        $this->entity_attributes_set_id = $entity_attributes_set_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityUniqueStringKey()
    {
        return $this->entity_unique_string_key;
    }

    /**
     * @param mixed $entity_unique_string_key
     * @return EntitiesDto
     */
    public function setEntityUniqueStringKey($entity_unique_string_key)
    {
        $this->entity_unique_string_key = $entity_unique_string_key;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityCreatedAt()
    {
        return $this->entity_created_at;
    }

    /**
     * @param mixed $entity_created_at
     * @return EntitiesDto
     */
    public function setEntityCreatedAt($entity_created_at)
    {
        $this->entity_created_at = $entity_created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityUpdatedAt()
    {
        return $this->entity_updated_at;
    }

    /**
     * @param mixed $entity_updated_at
     * @return EntitiesDto
     */
    public function setEntityUpdatedAt($entity_updated_at)
    {
        $this->entity_updated_at = $entity_updated_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityActive()
    {
        return $this->entity_active;
    }

    /**
     * @param mixed $entity_active
     * @return EntitiesDto
     */
    public function setEntityActive($entity_active)
    {
        $this->entity_active = $entity_active;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $attributes
     * @return EntityDto
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }


    
}