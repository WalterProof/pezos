<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $score;
    /**
     * 
     *
     * @var bool
     */
    protected $trusted;
    /**
     * 
     *
     * @var NetworkPeersPeerIdGetResponse200ConnMetadata
     */
    protected $connMetadata;
    /**
     * 
     *
     * @var NetworkPeersPeerIdGetResponse200PeerMetadata
     */
    protected $peerMetadata;
    /**
     * The state a peer connection can be in: accepted (when the connection is being established), running (when the connection is already established), disconnected (otherwise).
     *
     * @var string
     */
    protected $state;
    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     *
     * @var P2pConnectionId
     */
    protected $reachableAt;
    /**
     * Statistics about the p2p network.
     *
     * @var P2pStat
     */
    protected $stat;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $lastFailedConnection;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $lastRejectedConnection;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $lastEstablishedConnection;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $lastDisconnection;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $lastSeen;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $lastMiss;
    /**
     * 
     *
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTrusted() : bool
    {
        return $this->trusted;
    }
    /**
     * 
     *
     * @param bool $trusted
     *
     * @return self
     */
    public function setTrusted(bool $trusted) : self
    {
        $this->trusted = $trusted;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkPeersPeerIdGetResponse200ConnMetadata
     */
    public function getConnMetadata() : NetworkPeersPeerIdGetResponse200ConnMetadata
    {
        return $this->connMetadata;
    }
    /**
     * 
     *
     * @param NetworkPeersPeerIdGetResponse200ConnMetadata $connMetadata
     *
     * @return self
     */
    public function setConnMetadata(NetworkPeersPeerIdGetResponse200ConnMetadata $connMetadata) : self
    {
        $this->connMetadata = $connMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkPeersPeerIdGetResponse200PeerMetadata
     */
    public function getPeerMetadata() : NetworkPeersPeerIdGetResponse200PeerMetadata
    {
        return $this->peerMetadata;
    }
    /**
     * 
     *
     * @param NetworkPeersPeerIdGetResponse200PeerMetadata $peerMetadata
     *
     * @return self
     */
    public function setPeerMetadata(NetworkPeersPeerIdGetResponse200PeerMetadata $peerMetadata) : self
    {
        $this->peerMetadata = $peerMetadata;
        return $this;
    }
    /**
     * The state a peer connection can be in: accepted (when the connection is being established), running (when the connection is already established), disconnected (otherwise).
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The state a peer connection can be in: accepted (when the connection is being established), running (when the connection is already established), disconnected (otherwise).
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     *
     * @return P2pConnectionId
     */
    public function getReachableAt() : P2pConnectionId
    {
        return $this->reachableAt;
    }
    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     *
     * @param P2pConnectionId $reachableAt
     *
     * @return self
     */
    public function setReachableAt(P2pConnectionId $reachableAt) : self
    {
        $this->reachableAt = $reachableAt;
        return $this;
    }
    /**
     * Statistics about the p2p network.
     *
     * @return P2pStat
     */
    public function getStat() : P2pStat
    {
        return $this->stat;
    }
    /**
     * Statistics about the p2p network.
     *
     * @param P2pStat $stat
     *
     * @return self
     */
    public function setStat(P2pStat $stat) : self
    {
        $this->stat = $stat;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getLastFailedConnection() : array
    {
        return $this->lastFailedConnection;
    }
    /**
     * 
     *
     * @param mixed[] $lastFailedConnection
     *
     * @return self
     */
    public function setLastFailedConnection(array $lastFailedConnection) : self
    {
        $this->lastFailedConnection = $lastFailedConnection;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getLastRejectedConnection() : array
    {
        return $this->lastRejectedConnection;
    }
    /**
     * 
     *
     * @param mixed[] $lastRejectedConnection
     *
     * @return self
     */
    public function setLastRejectedConnection(array $lastRejectedConnection) : self
    {
        $this->lastRejectedConnection = $lastRejectedConnection;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getLastEstablishedConnection() : array
    {
        return $this->lastEstablishedConnection;
    }
    /**
     * 
     *
     * @param mixed[] $lastEstablishedConnection
     *
     * @return self
     */
    public function setLastEstablishedConnection(array $lastEstablishedConnection) : self
    {
        $this->lastEstablishedConnection = $lastEstablishedConnection;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getLastDisconnection() : array
    {
        return $this->lastDisconnection;
    }
    /**
     * 
     *
     * @param mixed[] $lastDisconnection
     *
     * @return self
     */
    public function setLastDisconnection(array $lastDisconnection) : self
    {
        $this->lastDisconnection = $lastDisconnection;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getLastSeen() : array
    {
        return $this->lastSeen;
    }
    /**
     * 
     *
     * @param mixed[] $lastSeen
     *
     * @return self
     */
    public function setLastSeen(array $lastSeen) : self
    {
        $this->lastSeen = $lastSeen;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getLastMiss() : array
    {
        return $this->lastMiss;
    }
    /**
     * 
     *
     * @param mixed[] $lastMiss
     *
     * @return self
     */
    public function setLastMiss(array $lastMiss) : self
    {
        $this->lastMiss = $lastMiss;
        return $this;
    }
}