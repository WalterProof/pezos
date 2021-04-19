<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersChainValidatorsChainIdDdbGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $p2pReaders;
    /**
     * 
     *
     * @var int
     */
    protected $activeChains;
    /**
     * 
     *
     * @var WorkersChainValidatorsChainIdDdbGetResponse200OperationDb
     */
    protected $operationDb;
    /**
     * 
     *
     * @var WorkersChainValidatorsChainIdDdbGetResponse200OperationsDb
     */
    protected $operationsDb;
    /**
     * 
     *
     * @var WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDb
     */
    protected $blockHeaderDb;
    /**
     * 
     *
     * @var int
     */
    protected $activeConnections;
    /**
     * 
     *
     * @var int
     */
    protected $activePeers;
    /**
     * 
     *
     * @return int
     */
    public function getP2pReaders() : int
    {
        return $this->p2pReaders;
    }
    /**
     * 
     *
     * @param int $p2pReaders
     *
     * @return self
     */
    public function setP2pReaders(int $p2pReaders) : self
    {
        $this->p2pReaders = $p2pReaders;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getActiveChains() : int
    {
        return $this->activeChains;
    }
    /**
     * 
     *
     * @param int $activeChains
     *
     * @return self
     */
    public function setActiveChains(int $activeChains) : self
    {
        $this->activeChains = $activeChains;
        return $this;
    }
    /**
     * 
     *
     * @return WorkersChainValidatorsChainIdDdbGetResponse200OperationDb
     */
    public function getOperationDb() : WorkersChainValidatorsChainIdDdbGetResponse200OperationDb
    {
        return $this->operationDb;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdDdbGetResponse200OperationDb $operationDb
     *
     * @return self
     */
    public function setOperationDb(WorkersChainValidatorsChainIdDdbGetResponse200OperationDb $operationDb) : self
    {
        $this->operationDb = $operationDb;
        return $this;
    }
    /**
     * 
     *
     * @return WorkersChainValidatorsChainIdDdbGetResponse200OperationsDb
     */
    public function getOperationsDb() : WorkersChainValidatorsChainIdDdbGetResponse200OperationsDb
    {
        return $this->operationsDb;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdDdbGetResponse200OperationsDb $operationsDb
     *
     * @return self
     */
    public function setOperationsDb(WorkersChainValidatorsChainIdDdbGetResponse200OperationsDb $operationsDb) : self
    {
        $this->operationsDb = $operationsDb;
        return $this;
    }
    /**
     * 
     *
     * @return WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDb
     */
    public function getBlockHeaderDb() : WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDb
    {
        return $this->blockHeaderDb;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDb $blockHeaderDb
     *
     * @return self
     */
    public function setBlockHeaderDb(WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDb $blockHeaderDb) : self
    {
        $this->blockHeaderDb = $blockHeaderDb;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getActiveConnections() : int
    {
        return $this->activeConnections;
    }
    /**
     * 
     *
     * @param int $activeConnections
     *
     * @return self
     */
    public function setActiveConnections(int $activeConnections) : self
    {
        $this->activeConnections = $activeConnections;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getActivePeers() : int
    {
        return $this->activePeers;
    }
    /**
     * 
     *
     * @param int $activePeers
     *
     * @return self
     */
    public function setActivePeers(int $activePeers) : self
    {
        $this->activePeers = $activePeers;
        return $this;
    }
}