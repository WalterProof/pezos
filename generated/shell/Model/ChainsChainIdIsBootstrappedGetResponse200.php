<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ChainsChainIdIsBootstrappedGetResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $bootstrapped;
    /**
    * If 'unsynced', the node is not currently synchronized with of its peers (it is probably still bootstrapping and its head is lagging behind the chain's).
    If 'synced', the node considers itself synchronized with its peers and the current head timestamp is recent.
    If 'stuck', the node considers itself synchronized with its peers but the chain seems to be halted from its viewpoint.
    *
    * @var string
    */
    protected $syncState;
    /**
     * 
     *
     * @return bool
     */
    public function getBootstrapped() : bool
    {
        return $this->bootstrapped;
    }
    /**
     * 
     *
     * @param bool $bootstrapped
     *
     * @return self
     */
    public function setBootstrapped(bool $bootstrapped) : self
    {
        $this->bootstrapped = $bootstrapped;
        return $this;
    }
    /**
    * If 'unsynced', the node is not currently synchronized with of its peers (it is probably still bootstrapping and its head is lagging behind the chain's).
    If 'synced', the node considers itself synchronized with its peers and the current head timestamp is recent.
    If 'stuck', the node considers itself synchronized with its peers but the chain seems to be halted from its viewpoint.
    *
    * @return string
    */
    public function getSyncState() : string
    {
        return $this->syncState;
    }
    /**
    * If 'unsynced', the node is not currently synchronized with of its peers (it is probably still bootstrapping and its head is lagging behind the chain's).
    If 'synced', the node considers itself synchronized with its peers and the current head timestamp is recent.
    If 'stuck', the node considers itself synchronized with its peers but the chain seems to be halted from its viewpoint.
    *
    * @param string $syncState
    *
    * @return self
    */
    public function setSyncState(string $syncState) : self
    {
        $this->syncState = $syncState;
        return $this;
    }
}