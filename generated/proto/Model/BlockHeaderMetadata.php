<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class BlockHeaderMetadata extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $protocol;
    /**
     * 
     *
     * @var string
     */
    protected $nextProtocol;
    /**
     * The status of the test chain: not_running (there is no test chain at the moment), forking (the test chain is being setup), running (the test chain is running).
     *
     * @var mixed
     */
    protected $testChainStatus;
    /**
     * 
     *
     * @var int
     */
    protected $maxOperationsTtl;
    /**
     * 
     *
     * @var int
     */
    protected $maxOperationDataLength;
    /**
     * 
     *
     * @var int
     */
    protected $maxBlockHeaderLength;
    /**
     * 
     *
     * @var BlockHeaderMetadataMaxOperationListLengthItem[]
     */
    protected $maxOperationListLength;
    /**
     * 
     *
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }
    /**
     * 
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol) : self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNextProtocol() : string
    {
        return $this->nextProtocol;
    }
    /**
     * 
     *
     * @param string $nextProtocol
     *
     * @return self
     */
    public function setNextProtocol(string $nextProtocol) : self
    {
        $this->nextProtocol = $nextProtocol;
        return $this;
    }
    /**
     * The status of the test chain: not_running (there is no test chain at the moment), forking (the test chain is being setup), running (the test chain is running).
     *
     * @return mixed
     */
    public function getTestChainStatus()
    {
        return $this->testChainStatus;
    }
    /**
     * The status of the test chain: not_running (there is no test chain at the moment), forking (the test chain is being setup), running (the test chain is running).
     *
     * @param mixed $testChainStatus
     *
     * @return self
     */
    public function setTestChainStatus($testChainStatus) : self
    {
        $this->testChainStatus = $testChainStatus;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxOperationsTtl() : int
    {
        return $this->maxOperationsTtl;
    }
    /**
     * 
     *
     * @param int $maxOperationsTtl
     *
     * @return self
     */
    public function setMaxOperationsTtl(int $maxOperationsTtl) : self
    {
        $this->maxOperationsTtl = $maxOperationsTtl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxOperationDataLength() : int
    {
        return $this->maxOperationDataLength;
    }
    /**
     * 
     *
     * @param int $maxOperationDataLength
     *
     * @return self
     */
    public function setMaxOperationDataLength(int $maxOperationDataLength) : self
    {
        $this->maxOperationDataLength = $maxOperationDataLength;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxBlockHeaderLength() : int
    {
        return $this->maxBlockHeaderLength;
    }
    /**
     * 
     *
     * @param int $maxBlockHeaderLength
     *
     * @return self
     */
    public function setMaxBlockHeaderLength(int $maxBlockHeaderLength) : self
    {
        $this->maxBlockHeaderLength = $maxBlockHeaderLength;
        return $this;
    }
    /**
     * 
     *
     * @return BlockHeaderMetadataMaxOperationListLengthItem[]
     */
    public function getMaxOperationListLength() : array
    {
        return $this->maxOperationListLength;
    }
    /**
     * 
     *
     * @param BlockHeaderMetadataMaxOperationListLengthItem[] $maxOperationListLength
     *
     * @return self
     */
    public function setMaxOperationListLength(array $maxOperationListLength) : self
    {
        $this->maxOperationListLength = $maxOperationListLength;
        return $this;
    }
}