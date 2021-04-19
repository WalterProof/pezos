<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class EndorsingPowerPostBody
{
    /**
     * 
     *
     * @var EndorsingPowerPostBodyEndorsementOperation
     */
    protected $endorsementOperation;
    /**
     * 
     *
     * @var mixed
     */
    protected $chainId;
    /**
     * 
     *
     * @return EndorsingPowerPostBodyEndorsementOperation
     */
    public function getEndorsementOperation() : EndorsingPowerPostBodyEndorsementOperation
    {
        return $this->endorsementOperation;
    }
    /**
     * 
     *
     * @param EndorsingPowerPostBodyEndorsementOperation $endorsementOperation
     *
     * @return self
     */
    public function setEndorsementOperation(EndorsingPowerPostBodyEndorsementOperation $endorsementOperation) : self
    {
        $this->endorsementOperation = $endorsementOperation;
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