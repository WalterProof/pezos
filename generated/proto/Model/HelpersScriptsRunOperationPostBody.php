<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsRunOperationPostBody
{
    /**
     * An operation's shell header.
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
     * An operation's shell header.
     *
     * @return HelpersScriptsRunOperationPostBodyOperation
     */
    public function getOperation() : HelpersScriptsRunOperationPostBodyOperation
    {
        return $this->operation;
    }
    /**
     * An operation's shell header.
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