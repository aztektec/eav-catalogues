<?php
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 15/09/16
 * Time: 1:13
 */

namespace Aztektec\EAV\Dto;


class RelationDto
{

    /**
     * @var
     */
    protected $relation_id;

    /**
     * @var
     */
    protected $relation_type_id;

    /**
     * @var
     */
    protected $relation_entity_id_a;

    /**
     * @var
     */
    protected $relation_entity_id_b;

    /**
     * @return mixed
     */
    public function getRelationId()
    {
        return $this->relation_id;
    }

    /**
     * @param mixed $relation_id
     * @return RelationDto
     */
    public function setRelationId($relation_id)
    {
        $this->relation_id = $relation_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationTypeId()
    {
        return $this->relation_type_id;
    }

    /**
     * @param mixed $relation_type_id
     * @return RelationDto
     */
    public function setRelationTypeId($relation_type_id)
    {
        $this->relation_type_id = $relation_type_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationEntityIdA()
    {
        return $this->relation_entity_id_a;
    }

    /**
     * @param mixed $relation_entity_id_a
     * @return RelationDto
     */
    public function setRelationEntityIdA($relation_entity_id_a)
    {
        $this->relation_entity_id_a = $relation_entity_id_a;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationEntityIdB()
    {
        return $this->relation_entity_id_b;
    }

    /**
     * @param mixed $relation_entity_id_b
     * @return RelationDto
     */
    public function setRelationEntityIdB($relation_entity_id_b)
    {
        $this->relation_entity_id_b = $relation_entity_id_b;
        return $this;
    }
    
}