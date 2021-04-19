<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived
{
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $head;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $branch;
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getHead() : string
    {
        return $this->head;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $head
     *
     * @return self
     */
    public function setHead(string $head) : self
    {
        $this->head = $head;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getBranch() : string
    {
        return $this->branch;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $branch
     *
     * @return self
     */
    public function setBranch(string $branch) : self
    {
        $this->branch = $branch;
        return $this;
    }
}