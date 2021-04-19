<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines
{
    /**
     * 
     *
     * @var int
     */
    protected $fetchedHeaders;
    /**
     * 
     *
     * @var int
     */
    protected $fetchedBlocks;
    /**
     * 
     *
     * @return int
     */
    public function getFetchedHeaders() : int
    {
        return $this->fetchedHeaders;
    }
    /**
     * 
     *
     * @param int $fetchedHeaders
     *
     * @return self
     */
    public function setFetchedHeaders(int $fetchedHeaders) : self
    {
        $this->fetchedHeaders = $fetchedHeaders;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFetchedBlocks() : int
    {
        return $this->fetchedBlocks;
    }
    /**
     * 
     *
     * @param int $fetchedBlocks
     *
     * @return self
     */
    public function setFetchedBlocks(int $fetchedBlocks) : self
    {
        $this->fetchedBlocks = $fetchedBlocks;
        return $this;
    }
}