<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class ContextContractsContractIdBigMapGetPostBody
{
    /**
     * 
     *
     * @var mixed
     */
    protected $key;
    /**
     * 
     *
     * @var mixed
     */
    protected $type;
    /**
     * 
     *
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param mixed $key
     *
     * @return self
     */
    public function setKey($key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->type = $type;
        return $this;
    }
}