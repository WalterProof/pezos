<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsRunOperationPostBody
{
    /**
     * 
     *
     * @var HelpersScriptsRunOperationPostBodyOperation
     */
    protected $operation;
    /**
     * 
     *
     * @var mixed
     */
    protected $chainId;
    /**
     * 
     *
     * @return HelpersScriptsRunOperationPostBodyOperation
     */
    public function getOperation() : HelpersScriptsRunOperationPostBodyOperation
    {
        return $this->operation;
    }
    /**
     * 
     *
     * @param HelpersScriptsRunOperationPostBodyOperation $operation
     *
     * @return self
     */
    public function setOperation(HelpersScriptsRunOperationPostBodyOperation $operation) : self
    {
        $this->operation = $operation;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getChainId()
    {
        return $this->chainId;
    }
    /**
     * 
     *
     * @param mixed $chainId
     *
     * @return self
     */
    public function setChainId($chainId) : self
    {
        $this->chainId = $chainId;
        return $this;
    }
}