<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersParseOperationsPostBody
{
    /**
     * 
     *
     * @var mixed[]
     */
    protected $operations;
    /**
     * 
     *
     * @var bool
     */
    protected $checkSignature;
    /**
     * 
     *
     * @return mixed[]
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param mixed[] $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCheckSignature() : bool
    {
        return $this->checkSignature;
    }
    /**
     * 
     *
     * @param bool $checkSignature
     *
     * @return self
     */
    public function setCheckSignature(bool $checkSignature) : self
    {
        $this->checkSignature = $checkSignature;
        return $this;
    }
}