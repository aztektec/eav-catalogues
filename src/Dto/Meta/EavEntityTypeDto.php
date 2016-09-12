<?php
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 12/09/16
 * Time: 0:17
 */

namespace Aztektec\EAV\Dto\Meta;


class EavEntityTypeDto
{
    /**
     * @var
     */
    protected $entity_type_id;
    /**
     * @var
     */
    protected $entity_type_code;
    /**
     * @var
     */
    protected $entity_type_description;
    /**
     * @var
     */
    protected $entity_type_table;
    /**
     * @var
     */
    protected $entity_type_status;
    /**
     * @var
     */
    protected $entity_type_value_table_prefix;
    /**
     * @var
     */
    protected $entity_type_ddl_description;

    /**
     * @return mixed
     */
    public function getEntityTypeId()
    {
        return $this->entity_type_id;
    }

    /**
     * @param mixed $entity_type_id
     * @return EavEntityTypeDto
     */
    public function setEntityTypeId($entity_type_id)
    {
        $this->entity_type_id = $entity_type_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityTypeCode()
    {
        return $this->entity_type_code;
    }

    /**
     * @param mixed $entity_type_code
     * @return EavEntityTypeDto
     */
    public function setEntityTypeCode($entity_type_code)
    {
        $this->entity_type_code = $entity_type_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityTypeDescription()
    {
        return $this->entity_type_description;
    }

    /**
     * @param mixed $entity_type_description
     * @return EavEntityTypeDto
     */
    public function setEntityTypeDescription($entity_type_description)
    {
        $this->entity_type_description = $entity_type_description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityTypeTable()
    {
        return $this->entity_type_table;
    }

    /**
     * @param mixed $entity_type_table
     * @return EavEntityTypeDto
     */
    public function setEntityTypeTable($entity_type_table)
    {
        $this->entity_type_table = $entity_type_table;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityTypeStatus()
    {
        return $this->entity_type_status;
    }

    /**
     * @param mixed $entity_type_status
     * @return EavEntityTypeDto
     */
    public function setEntityTypeStatus($entity_type_status)
    {
        $this->entity_type_status = $entity_type_status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityTypeValueTablePrefix()
    {
        return $this->entity_type_value_table_prefix;
    }

    /**
     * @param mixed $entity_type_value_table_prefix
     * @return EavEntityTypeDto
     */
    public function setEntityTypeValueTablePrefix($entity_type_value_table_prefix)
    {
        $this->entity_type_value_table_prefix = $entity_type_value_table_prefix;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityTypeDdlDescription()
    {
        return $this->entity_type_ddl_description;
    }

    /**
     * @param mixed $entity_type_ddl_description
     * @return EavEntityTypeDto
     */
    public function setEntityTypeDdlDescription($entity_type_ddl_description)
    {
        $this->entity_type_ddl_description = $entity_type_ddl_description;
        return $this;
    }
    
    
}