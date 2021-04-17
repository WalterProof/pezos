<?php

namespace Pezos\Generated\Proto\Model;

class _008PtEdo2ZkInlinedEndorsement
{
    /**
     * 
     *
     * @var mixed
     */
    protected $branch;
    /**
     * 
     *
     * @var _008PtEdo2ZkInlinedEndorsementContents
     */
    protected $operations;
    /**
     * 
     *
     * @var mixed
     */
    protected $signature;
    /**
     * 
     *
     * @return mixed
     */
    public function getBranch()
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param mixed $branch
     *
     * @return self
     */
    public function setBranch($branch) : self
    {
        $this->branch = $branch;
        return $this;
    }
    /**
     * 
     *
     * @return _008PtEdo2ZkInlinedEndorsementContents
     */
    public function getOperations() : _008PtEdo2ZkInlinedEndorsementContents
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param _008PtEdo2ZkInlinedEndorsementContents $operations
     *
     * @return self
     */
    public function setOperations(_008PtEdo2ZkInlinedEndorsementContents $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
    }
    /**
     * 
     *
     * @param mixed $signature
     *
     * @return self
     */
    public function setSignature($signature) : self
    {
        $this->signature = $signature;
        return $this;
    }
}