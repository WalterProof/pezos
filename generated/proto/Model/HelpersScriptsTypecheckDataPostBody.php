<?php

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsTypecheckDataPostBody
{
    /**
     * 
     *
     * @var mixed
     */
    protected $data;
    /**
     * 
     *
     * @var mixed
     */
    protected $type;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $gas;
    /**
     * 
     *
     * @var bool
     */
    protected $legacy;
    /**
     * 
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param mixed $data
     *
     * @return self
     */
    public function setData($data) : self
    {
        $this->data = $data;
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
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getGas() : string
    {
        return $this->gas;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $gas
     *
     * @return self
     */
    public function setGas(string $gas) : self
    {
        $this->gas = $gas;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getLegacy() : bool
    {
        return $this->legacy;
    }
    /**
     * 
     *
     * @param bool $legacy
     *
     * @return self
     */
    public function setLegacy(bool $legacy) : self
    {
        $this->legacy = $legacy;
        return $this;
    }
}