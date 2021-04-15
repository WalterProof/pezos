<?php

namespace Pezos\Generated\Shell\Model;

class P2pPointInfo
{
    /**
     * 
     *
     * @var bool
     */
    protected $trusted;
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @var mixed
     */
    protected $greylistedUntil;
    /**
     * The state a connection to a peer point can be in: requested (connection open from here), accepted (handshake), running (connection already established), disconnected (no connection).
     *
     * @var mixed
     */
    protected $state;
    /**
     * 
     *
     * @var mixed
     */
    protected $p2pPeerId;
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @var mixed
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
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @var mixed
     */
    protected $lastMiss;
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
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @return mixed
     */
    public function getGreylistedUntil()
    {
        return $this->greylistedUntil;
    }
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @param mixed $greylistedUntil
     *
     * @return self
     */
    public function setGreylistedUntil($greylistedUntil) : self
    {
        $this->greylistedUntil = $greylistedUntil;
        return $this;
    }
    /**
     * The state a connection to a peer point can be in: requested (connection open from here), accepted (handshake), running (connection already established), disconnected (no connection).
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * The state a connection to a peer point can be in: requested (connection open from here), accepted (handshake), running (connection already established), disconnected (no connection).
     *
     * @param mixed $state
     *
     * @return self
     */
    public function setState($state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getP2pPeerId()
    {
        return $this->p2pPeerId;
    }
    /**
     * 
     *
     * @param mixed $p2pPeerId
     *
     * @return self
     */
    public function setP2pPeerId($p2pPeerId) : self
    {
        $this->p2pPeerId = $p2pPeerId;
        return $this;
    }
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @return mixed
     */
    public function getLastFailedConnection()
    {
        return $this->lastFailedConnection;
    }
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @param mixed $lastFailedConnection
     *
     * @return self
     */
    public function setLastFailedConnection($lastFailedConnection) : self
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
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @return mixed
     */
    public function getLastMiss()
    {
        return $this->lastMiss;
    }
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @param mixed $lastMiss
     *
     * @return self
     */
    public function setLastMiss($lastMiss) : self
    {
        $this->lastMiss = $lastMiss;
        return $this;
    }
}