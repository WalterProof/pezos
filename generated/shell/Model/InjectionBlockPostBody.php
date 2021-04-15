<?php

namespace Pezos\Generated\Shell\Model;

class InjectionBlockPostBody
{
    /**
     * 
     *
     * @var string
     */
    protected $data;
    /**
     * 
     *
     * @var Operation[][]
     */
    protected $operations;
    /**
     * 
     *
     * @return string
     */
    public function getData() : string
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return Operation[][]
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param Operation[][] $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
}