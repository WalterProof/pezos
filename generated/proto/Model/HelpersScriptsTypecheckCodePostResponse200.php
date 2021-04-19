<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsTypecheckCodePostResponse200
{
    /**
     * 
     *
     * @var HelpersScriptsTypecheckCodePostResponse200TypeMapItem[]
     */
    protected $typeMap;
    /**
     * 
     *
     * @var mixed
     */
    protected $gas;
    /**
     * 
     *
     * @return HelpersScriptsTypecheckCodePostResponse200TypeMapItem[]
     */
    public function getTypeMap() : array
    {
        return $this->typeMap;
    }
    /**
     * 
     *
     * @param HelpersScriptsTypecheckCodePostResponse200TypeMapItem[] $typeMap
     *
     * @return self
     */
    public function setTypeMap(array $typeMap) : self
    {
        $this->typeMap = $typeMap;
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