<?php
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 15/09/16
 * Time: 0:56
 */

namespace Aztektec\EAV\Dto\Meta;


class EavRelationTypeDto
{

    /**
     * @var
     */
    protected $relation_type_id;

    /**
     * @var
     */
    protected $relation_relation_id;

    /**
     * @var
     */
    protected $relation_description;

    /**
     * @var
     */
    protected $relation_active;

    /**
     * @var
     */
    protected $relation_entity_type_a;

    /**
     * @var
     */
    protected $relation_entity_type_b;

    /**
     * @return mixed
     */
    public function getRelationTypeId()
    {
        return $this->relation_type_id;
    }

    /**
     * @param mixed $relation_type_id
     * @return EavRelationTypeDto
     */
    public function setRelationTypeId($relation_type_id)
    {
        $this->relation_type_id = $relation_type_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationRelationId()
    {
        return $this->relation_relation_id;
    }

    /**
     * @param mixed $relation_relation_id
     * @return EavRelationTypeDto
     */
    public function setRelationRelationId($relation_relation_id)
    {
        $this->relation_relation_id = $relation_relation_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationDescription()
    {
        return $this->relation_description;
    }

    /**
     * @param mixed $relation_description
     * @return EavRelationTypeDto
     */
    public function setRelationDescription($relation_description)
    {
        $this->relation_description = $relation_description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationActive()
    {
        return $this->relation_active;
    }

    /**
     * @param mixed $relation_active
     * @return EavRelationTypeDto
     */
    public function setRelationActive($relation_active)
    {
        $this->relation_active = $relation_active;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationEntityTypeA()
    {
        return $this->relation_entity_type_a;
    }

    /**
     * @param mixed $relation_entity_type_a
     * @return EavRelationTypeDto
     */
    public function setRelationEntityTypeA($relation_entity_type_a)
    {
        $this->relation_entity_type_a = $relation_entity_type_a;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationEntityTypeB()
    {
        return $this->relation_entity_type_b;
    }

    /**
     * @param mixed $relation_entity_type_b
     * @return EavRelationTypeDto
     */
    public function setRelationEntityTypeB($relation_entity_type_b)
    {
        $this->relation_entity_type_b = $relation_entity_type_b;
        return $this;
    }
    
    
}