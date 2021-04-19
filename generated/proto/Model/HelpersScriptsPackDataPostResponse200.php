<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsPackDataPostResponse200
{
    /**
     * 
     *
     * @var string
     */
    protected $packed;
    /**
     * 
     *
     * @var mixed
     */
    protected $gas;
    /**
     * 
     *
     * @return string
     */
    public function getPacked() : string
    {
        return $this->packed;
    }
    /**
     * 
     *
     * @param string $packed
     *
     * @return self
     */
    public function setPacked(string $packed) : self
    {
        $this->packed = $packed;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getGas()
    {
        return $this->gas;
    }
    /**
     * 
     *
     * @param mixed $gas
     *
     * @return self
     */
    public function setGas($gas) : self
    {
        $this->gas = $gas;
        return $this;
    }
}