<?php
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 15/09/16
 * Time: 0:08
 */

namespace Aztektec\EAV\Dto\Meta;


class EavAttributeGroupDto
{

    /**
     * @var
     */
    protected $entity_attribute_group_id;

    /**
     * @var
     */
    protected $entity_attribute_id;

    /**
     * @var
     */
    protected $entity_group_id;

    /**
     * @var
     */
    protected $entity_group_order;

    /**
     * @var
     */
    protected $entity_group_status;

    /**
     * @var
     */
    protected $entity_group_entity_type_id;

    /**
     * @return mixed
     */
    public function getEntityAttributeGroupId()
    {
        return $this->entity_attribute_group_id;
    }

    /**
     * @param mixed $entity_attribute_group_id
     * @return EavAttributeGroup
     */
    public function setEntityAttributeGroupId($entity_attribute_group_id)
    {
        $this->entity_attribute_group_id = $entity_attribute_group_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityAttributeId()
    {
        return $this->entity_attribute_id;
    }

    /**
     * @param mixed $entity_attribute_id
     * @return EavAttributeGroup
     */
    public function setEntityAttributeId($entity_attribute_id)
    {
        $this->entity_attribute_id = $entity_attribute_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityGroupId()
    {
        return $this->entity_group_id;
    }

    /**
     * @param mixed $entity_group_id
     * @return EavAttributeGroup
     */
    public function setEntityGroupId($entity_group_id)
    {
        $this->entity_group_id = $entity_group_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityGroupOrder()
    {
        return $this->entity_group_order;
    }

    /**
     * @param mixed $entity_group_order
     * @return EavAttributeGroup
     */
    public function setEntityGroupOrder($entity_group_order)
    {
        $this->entity_group_order = $entity_group_order;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityGroupStatus()
    {
        return $this->entity_group_status;
    }

    /**
     * @param mixed $entity_group_status
     * @return EavAttributeGroup
     */
    public function setEntityGroupStatus($entity_group_status)
    {
        $this->entity_group_status = $entity_group_status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityGroupEntityTypeId()
    {
        return $this->entity_group_entity_type_id;
    }

    /**
     * @param mixed $entity_group_entity_type_id
     * @return EavAttributeGroup
     */
    public function setEntityGroupEntityTypeId($entity_group_entity_type_id)
    {
        $this->entity_group_entity_type_id = $entity_group_entity_type_id;
        return $this;
    }
    
    
}