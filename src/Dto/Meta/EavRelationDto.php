<?php
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 15/09/16
 * Time: 0:55
 */

namespace Aztektec\EAV\Dto\Meta;


class EavRelationDto
{

    /**
     * @var
     */
    protected $relation_id;

    /**
     * @var
     */
    protected $relation_code;

    /**
     * @var
     */
    protected $relation_description;

    /**
     * @var
     */
    protected $relation_active;

    /**
     * @return mixed
     */
    public function getRelationId()
    {
        return $this->relation_id;
    }

    /**
     * @param mixed $relation_id
     * @return EavRelation
     */
    public function setRelationId($relation_id)
    {
        $this->relation_id = $relation_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelationCode()
    {
        return $this->relation_code;
    }

    /**
     * @param mixed $relation_code
     * @return EavRelation
     */
    public function setRelationCode($relation_code)
    {
        $this->relation_code = $relation_code;
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
     * @return EavRelation
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
     * @return EavRelation
     */
    public function setRelationActive($relation_active)
    {
        $this->relation_active = $relation_active;
        return $this;
    }
    
    
}