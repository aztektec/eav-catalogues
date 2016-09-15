<?php
/**
 * Created by PhpStorm.
 * User: oalvarado
 * Date: 15/09/16
 * Time: 0:54
 */

namespace Aztektec\EAV\Dto\Meta;


class EavAttributeOptionDto
{

    /**
     * @var
     */
    protected $attribute_option_id;

    /**
     * @var
     */
    protected $attribute_option_attribute_id;

    /**
     * @var
     */
    protected $attribute_value;

    /**
     * @var
     */
    protected $attribute_option_sort;

    /**
     * @var
     */
    protected $attribute_active;

    /**
     * @return mixed
     */
    public function getAttributeOptionId()
    {
        return $this->attribute_option_id;
    }

    /**
     * @param mixed $attribute_option_id
     * @return EavAttributeOption
     */
    public function setAttributeOptionId($attribute_option_id)
    {
        $this->attribute_option_id = $attribute_option_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributeOptionAttributeId()
    {
        return $this->attribute_option_attribute_id;
    }

    /**
     * @param mixed $attribute_option_attribute_id
     * @return EavAttributeOption
     */
    public function setAttributeOptionAttributeId($attribute_option_attribute_id)
    {
        $this->attribute_option_attribute_id = $attribute_option_attribute_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributeValue()
    {
        return $this->attribute_value;
    }

    /**
     * @param mixed $attribute_value
     * @return EavAttributeOption
     */
    public function setAttributeValue($attribute_value)
    {
        $this->attribute_value = $attribute_value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributeOptionSort()
    {
        return $this->attribute_option_sort;
    }

    /**
     * @param mixed $attribute_option_sort
     * @return EavAttributeOption
     */
    public function setAttributeOptionSort($attribute_option_sort)
    {
        $this->attribute_option_sort = $attribute_option_sort;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributeActive()
    {
        return $this->attribute_active;
    }

    /**
     * @param mixed $attribute_active
     * @return EavAttributeOption
     */
    public function setAttributeActive($attribute_active)
    {
        $this->attribute_active = $attribute_active;
        return $this;
    }
    
    
}