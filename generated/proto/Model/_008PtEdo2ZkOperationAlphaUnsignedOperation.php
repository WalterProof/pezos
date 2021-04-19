<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class _008PtEdo2ZkOperationAlphaUnsignedOperation
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
     * @var mixed[]
     */
    protected $contents;
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
     * @return mixed[]
     */
    public function getContents() : array
    {
        return $this->contents;
    }
    /**
     * 
     *
     * @param mixed[] $contents
     *
     * @return self
     */
    public function setContents(array $contents) : self
    {
        $this->contents = $contents;
        return $this;
    }
}