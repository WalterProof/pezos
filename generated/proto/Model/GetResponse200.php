<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class GetResponse200
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
     * @var mixed
     */
    protected $chainId;
    /**
     * 
     *
     * @var mixed
     */
    protected $hash;
    /**
     * Block header's shell-related content. It contains information such as the block level, its predecessor and timestamp.
     *
     * @var RawBlockHeader
     */
    protected $header;
    /**
     * 
     *
     * @var BlockHeaderMetadata
     */
    protected $metadata;
    /**
     * 
     *
     * @var mixed[][]
     */
    protected $operations;
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
    /**
     * 
     *
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }
    /**
     * 
     *
     * @param mixed $hash
     *
     * @return self
     */
    public function setHash($hash) : self
    {
        $this->hash = $hash;
        return $this;
    }
    /**
     * Block header's shell-related content. It contains information such as the block level, its predecessor and timestamp.
     *
     * @return RawBlockHeader
     */
    public function getHeader() : RawBlockHeader
    {
        return $this->header;
    }
    /**
     * Block header's shell-related content. It contains information such as the block level, its predecessor and timestamp.
     *
     * @param RawBlockHeader $header
     *
     * @return self
     */
    public function setHeader(RawBlockHeader $header) : self
    {
        $this->header = $header;
        return $this;
    }
    /**
     * 
     *
     * @return BlockHeaderMetadata
     */
    public function getMetadata() : BlockHeaderMetadata
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param BlockHeaderMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(BlockHeaderMetadata $metadata) : self
    {
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[][]
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param mixed[][] $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
}