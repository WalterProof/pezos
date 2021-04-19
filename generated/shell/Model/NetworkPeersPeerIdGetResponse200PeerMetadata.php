<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdGetResponse200PeerMetadata
{
    /**
     * 
     *
     * @var NetworkPeersPeerIdGetResponse200PeerMetadataResponses
     */
    protected $responses;
    /**
     * 
     *
     * @var NetworkPeersPeerIdGetResponse200PeerMetadataRequests
     */
    protected $requests;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $validBlocks;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $oldHeads;
    /**
     * 
     *
     * @var NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults
     */
    protected $prevalidatorResults;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $unactivatedChains;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $inactiveChains;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $futureBlocksAdvertised;
    /**
     * 
     *
     * @var NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertised
     */
    protected $unadvertised;
    /**
     * 
     *
     * @var NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements
     */
    protected $advertisements;
    /**
     * 
     *
     * @return NetworkPeersPeerIdGetResponse200PeerMetadataResponses
     */
    public function getResponses() : NetworkPeersPeerIdGetResponse200PeerMetadataResponses
    {
        return $this->responses;
    }
    /**
     * 
     *
     * @param NetworkPeersPeerIdGetResponse200PeerMetadataResponses $responses
     *
     * @return self
     */
    public function setResponses(NetworkPeersPeerIdGetResponse200PeerMetadataResponses $responses) : self
    {
        $this->responses = $responses;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkPeersPeerIdGetResponse200PeerMetadataRequests
     */
    public function getRequests() : NetworkPeersPeerIdGetResponse200PeerMetadataRequests
    {
        return $this->requests;
    }
    /**
     * 
     *
     * @param NetworkPeersPeerIdGetResponse200PeerMetadataRequests $requests
     *
     * @return self
     */
    public function setRequests(NetworkPeersPeerIdGetResponse200PeerMetadataRequests $requests) : self
    {
        $this->requests = $requests;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getValidBlocks() : string
    {
        return $this->validBlocks;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $validBlocks
     *
     * @return self
     */
    public function setValidBlocks(string $validBlocks) : self
    {
        $this->validBlocks = $validBlocks;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getOldHeads() : string
    {
        return $this->oldHeads;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $oldHeads
     *
     * @return self
     */
    public function setOldHeads(string $oldHeads) : self
    {
        $this->oldHeads = $oldHeads;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults
     */
    public function getPrevalidatorResults() : NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults
    {
        return $this->prevalidatorResults;
    }
    /**
     * 
     *
     * @param NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults $prevalidatorResults
     *
     * @return self
     */
    public function setPrevalidatorResults(NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults $prevalidatorResults) : self
    {
        $this->prevalidatorResults = $prevalidatorResults;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getUnactivatedChains() : string
    {
        return $this->unactivatedChains;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $unactivatedChains
     *
     * @return self
     */
    public function setUnactivatedChains(string $unactivatedChains) : self
    {
        $this->unactivatedChains = $unactivatedChains;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getInactiveChains() : string
    {
        return $this->inactiveChains;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $inactiveChains
     *
     * @return self
     */
    public function setInactiveChains(string $inactiveChains) : self
    {
        $this->inactiveChains = $inactiveChains;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getFutureBlocksAdvertised() : string
    {
        return $this->futureBlocksAdvertised;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $futureBlocksAdvertised
     *
     * @return self
     */
    public function setFutureBlocksAdvertised(string $futureBlocksAdvertised) : self
    {
        $this->futureBlocksAdvertised = $futureBlocksAdvertised;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertised
     */
    public function getUnadvertised() : NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertised
    {
        return $this->unadvertised;
    }
    /**
     * 
     *
     * @param NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertised $unadvertised
     *
     * @return self
     */
    public function setUnadvertised(NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertised $unadvertised) : self
    {
        $this->unadvertised = $unadvertised;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements
     */
    public function getAdvertisements() : NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements
    {
        return $this->advertisements;
    }
    /**
     * 
     *
     * @param NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements $advertisements
     *
     * @return self
     */
    public function setAdvertisements(NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements $advertisements) : self
    {
        $this->advertisements = $advertisements;
        return $this;
    }
}