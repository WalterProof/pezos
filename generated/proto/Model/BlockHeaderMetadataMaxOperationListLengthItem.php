<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class BlockHeaderMetadataMaxOperationListLengthItem
{
    /**
     * 
     *
     * @var int
     */
    protected $maxSize;
    /**
     * 
     *
     * @var int
     */
    protected $maxOp;
    /**
     * 
     *
     * @return int
     */
    public function getMaxSize() : int
    {
        return $this->maxSize;
    }
    /**
     * 
     *
     * @param int $maxSize
     *
     * @return self
     */
    public function setMaxSize(int $maxSize) : self
    {
        $this->maxSize = $maxSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxOp() : int
    {
        return $this->maxOp;
    }
    /**
     * 
     *
     * @param int $maxOp
     *
     * @return self
     */
    public function setMaxOp(int $maxOp) : self
    {
        $this->maxOp = $maxOp;
        return $this;
    }
}