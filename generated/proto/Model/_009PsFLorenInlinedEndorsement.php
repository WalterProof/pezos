<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class _009PsFLorenInlinedEndorsement
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
     * @var _009PsFLorenInlinedEndorsementContents
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
     * @return _009PsFLorenInlinedEndorsementContents
     */
    public function getOperations() : _009PsFLorenInlinedEndorsementContents
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param _009PsFLorenInlinedEndorsementContents $operations
     *
     * @return self
     */
    public function setOperations(_009PsFLorenInlinedEndorsementContents $operations) : self
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