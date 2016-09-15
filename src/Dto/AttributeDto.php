<?php
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 15/09/16
 * Time: 0:59
 */

namespace Aztektec\EAV\Dto;


class AttributeDto
{

    /**
     * @var
     */
    protected $value_id;

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
    protected $attribute_id;

    /**
     * @var
     */
    protected $attributes_set_id;

    /**
     * @var
     */
    protected $value;

    /**
     * @var
     */
    protected $order;

    /**
     * @var
     */
    protected $active;

    /**
     * @return mixed
     */
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * @param mixed $value_id
     * @return AttributeDto
     */
    public function setValueId($value_id)
    {
        $this->value_id = $value_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * @param mixed $entity_id
     * @return AttributeDto
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
     * @return AttributeDto
     */
    public function setEntityTypeId($entity_type_id)
    {
        $this->entity_type_id = $entity_type_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributeId()
    {
        return $this->attribute_id;
    }

    /**
     * @param mixed $attribute_id
     * @return AttributeDto
     */
    public function setAttributeId($attribute_id)
    {
        $this->attribute_id = $attribute_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributesSetId()
    {
        return $this->attributes_set_id;
    }

    /**
     * @param mixed $attributes_set_id
     * @return AttributeDto
     */
    public function setAttributesSetId($attributes_set_id)
    {
        $this->attributes_set_id = $attributes_set_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return AttributeDto
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     * @return AttributeDto
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     * @return AttributeDto
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
    
    
}