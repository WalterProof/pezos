<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertised
{
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $block;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $operations;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $protocol;
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getBlock() : string
    {
        return $this->block;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $block
     *
     * @return self
     */
    public function setBlock(string $block) : self
    {
        $this->block = $block;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getOperations() : string
    {
        return $this->operations;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $operations
     *
     * @return self
     */
    public function setOperations(string $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }
    /**
     * Decimal representation of a big number
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
}