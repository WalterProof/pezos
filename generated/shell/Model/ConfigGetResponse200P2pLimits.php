<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200P2pLimits
{
    /**
     * Delay acceptable when initiating a connection to a new peer, in seconds.
     *
     * @var mixed
     */
    protected $connectionTimeout;
    /**
     * Delay granted to a peer to perform authentication, in seconds.
     *
     * @var mixed
     */
    protected $authenticationTimeout;
    /**
     * Strict minimum number of connections (triggers an urgent maintenance).
     *
     * @var int
     */
    protected $minConnections;
    /**
     * Targeted number of connections to reach when bootstrapping / maintaining.
     *
     * @var int
     */
    protected $expectedConnections;
    /**
     * Maximum number of connections (exceeding peers are disconnected).
     *
     * @var int
     */
    protected $maxConnections;
    /**
     * Number above which pending incoming connections are immediately rejected.
     *
     * @var int
     */
    protected $backlog;
    /**
     * Number above which pending incoming connections are immediately rejected.
     *
     * @var int
     */
    protected $maxIncomingConnections;
    /**
     * Max download speeds in KiB/s.
     *
     * @var int
     */
    protected $maxDownloadSpeed;
    /**
     * Max upload speeds in KiB/s.
     *
     * @var int
     */
    protected $maxUploadSpeed;
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $swapLinger;
    /**
     * 
     *
     * @var int
     */
    protected $binaryChunksSize;
    /**
     * Size of the buffer passed to read(2).
     *
     * @var int
     */
    protected $readBufferSize;
    /**
     * 
     *
     * @var int
     */
    protected $readQueueSize;
    /**
     * 
     *
     * @var int
     */
    protected $writeQueueSize;
    /**
     * 
     *
     * @var int
     */
    protected $incomingAppMessageQueueSize;
    /**
     * 
     *
     * @var int
     */
    protected $incomingMessageQueueSize;
    /**
     * 
     *
     * @var int
     */
    protected $outgoingMessageQueueSize;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $maxKnownPoints;
    /**
     * max and target size for the known address table.
     *
     * @var mixed[]
     */
    protected $maxKnownPeerIds;
    /**
     * GC delay for the greylists tables, in seconds.
     *
     * @var mixed
     */
    protected $greylistTimeout;
    /**
     * How long to wait at most, in seconds, before running a maintenance loop.
     *
     * @var mixed
     */
    protected $maintenanceIdleTime;
    /**
     * Delay acceptable when initiating a connection to a new peer, in seconds.
     *
     * @return mixed
     */
    public function getConnectionTimeout()
    {
        return $this->connectionTimeout;
    }
    /**
     * Delay acceptable when initiating a connection to a new peer, in seconds.
     *
     * @param mixed $connectionTimeout
     *
     * @return self
     */
    public function setConnectionTimeout($connectionTimeout) : self
    {
        $this->connectionTimeout = $connectionTimeout;
        return $this;
    }
    /**
     * Delay granted to a peer to perform authentication, in seconds.
     *
     * @return mixed
     */
    public function getAuthenticationTimeout()
    {
        return $this->authenticationTimeout;
    }
    /**
     * Delay granted to a peer to perform authentication, in seconds.
     *
     * @param mixed $authenticationTimeout
     *
     * @return self
     */
    public function setAuthenticationTimeout($authenticationTimeout) : self
    {
        $this->authenticationTimeout = $authenticationTimeout;
        return $this;
    }
    /**
     * Strict minimum number of connections (triggers an urgent maintenance).
     *
     * @return int
     */
    public function getMinConnections() : int
    {
        return $this->minConnections;
    }
    /**
     * Strict minimum number of connections (triggers an urgent maintenance).
     *
     * @param int $minConnections
     *
     * @return self
     */
    public function setMinConnections(int $minConnections) : self
    {
        $this->minConnections = $minConnections;
        return $this;
    }
    /**
     * Targeted number of connections to reach when bootstrapping / maintaining.
     *
     * @return int
     */
    public function getExpectedConnections() : int
    {
        return $this->expectedConnections;
    }
    /**
     * Targeted number of connections to reach when bootstrapping / maintaining.
     *
     * @param int $expectedConnections
     *
     * @return self
     */
    public function setExpectedConnections(int $expectedConnections) : self
    {
        $this->expectedConnections = $expectedConnections;
        return $this;
    }
    /**
     * Maximum number of connections (exceeding peers are disconnected).
     *
     * @return int
     */
    public function getMaxConnections() : int
    {
        return $this->maxConnections;
    }
    /**
     * Maximum number of connections (exceeding peers are disconnected).
     *
     * @param int $maxConnections
     *
     * @return self
     */
    public function setMaxConnections(int $maxConnections) : self
    {
        $this->maxConnections = $maxConnections;
        return $this;
    }
    /**
     * Number above which pending incoming connections are immediately rejected.
     *
     * @return int
     */
    public function getBacklog() : int
    {
        return $this->backlog;
    }
    /**
     * Number above which pending incoming connections are immediately rejected.
     *
     * @param int $backlog
     *
     * @return self
     */
    public function setBacklog(int $backlog) : self
    {
        $this->backlog = $backlog;
        return $this;
    }
    /**
     * Number above which pending incoming connections are immediately rejected.
     *
     * @return int
     */
    public function getMaxIncomingConnections() : int
    {
        return $this->maxIncomingConnections;
    }
    /**
     * Number above which pending incoming connections are immediately rejected.
     *
     * @param int $maxIncomingConnections
     *
     * @return self
     */
    public function setMaxIncomingConnections(int $maxIncomingConnections) : self
    {
        $this->maxIncomingConnections = $maxIncomingConnections;
        return $this;
    }
    /**
     * Max download speeds in KiB/s.
     *
     * @return int
     */
    public function getMaxDownloadSpeed() : int
    {
        return $this->maxDownloadSpeed;
    }
    /**
     * Max download speeds in KiB/s.
     *
     * @param int $maxDownloadSpeed
     *
     * @return self
     */
    public function setMaxDownloadSpeed(int $maxDownloadSpeed) : self
    {
        $this->maxDownloadSpeed = $maxDownloadSpeed;
        return $this;
    }
    /**
     * Max upload speeds in KiB/s.
     *
     * @return int
     */
    public function getMaxUploadSpeed() : int
    {
        return $this->maxUploadSpeed;
    }
    /**
     * Max upload speeds in KiB/s.
     *
     * @param int $maxUploadSpeed
     *
     * @return self
     */
    public function setMaxUploadSpeed(int $maxUploadSpeed) : self
    {
        $this->maxUploadSpeed = $maxUploadSpeed;
        return $this;
    }
    /**
     * A span of time, as seen by the local computer.
     *
     * @return int
     */
    public function getSwapLinger() : int
    {
        return $this->swapLinger;
    }
    /**
     * A span of time, as seen by the local computer.
     *
     * @param int $swapLinger
     *
     * @return self
     */
    public function setSwapLinger(int $swapLinger) : self
    {
        $this->swapLinger = $swapLinger;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBinaryChunksSize() : int
    {
        return $this->binaryChunksSize;
    }
    /**
     * 
     *
     * @param int $binaryChunksSize
     *
     * @return self
     */
    public function setBinaryChunksSize(int $binaryChunksSize) : self
    {
        $this->binaryChunksSize = $binaryChunksSize;
        return $this;
    }
    /**
     * Size of the buffer passed to read(2).
     *
     * @return int
     */
    public function getReadBufferSize() : int
    {
        return $this->readBufferSize;
    }
    /**
     * Size of the buffer passed to read(2).
     *
     * @param int $readBufferSize
     *
     * @return self
     */
    public function setReadBufferSize(int $readBufferSize) : self
    {
        $this->readBufferSize = $readBufferSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReadQueueSize() : int
    {
        return $this->readQueueSize;
    }
    /**
     * 
     *
     * @param int $readQueueSize
     *
     * @return self
     */
    public function setReadQueueSize(int $readQueueSize) : self
    {
        $this->readQueueSize = $readQueueSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWriteQueueSize() : int
    {
        return $this->writeQueueSize;
    }
    /**
     * 
     *
     * @param int $writeQueueSize
     *
     * @return self
     */
    public function setWriteQueueSize(int $writeQueueSize) : self
    {
        $this->writeQueueSize = $writeQueueSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIncomingAppMessageQueueSize() : int
    {
        return $this->incomingAppMessageQueueSize;
    }
    /**
     * 
     *
     * @param int $incomingAppMessageQueueSize
     *
     * @return self
     */
    public function setIncomingAppMessageQueueSize(int $incomingAppMessageQueueSize) : self
    {
        $this->incomingAppMessageQueueSize = $incomingAppMessageQueueSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIncomingMessageQueueSize() : int
    {
        return $this->incomingMessageQueueSize;
    }
    /**
     * 
     *
     * @param int $incomingMessageQueueSize
     *
     * @return self
     */
    public function setIncomingMessageQueueSize(int $incomingMessageQueueSize) : self
    {
        $this->incomingMessageQueueSize = $incomingMessageQueueSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOutgoingMessageQueueSize() : int
    {
        return $this->outgoingMessageQueueSize;
    }
    /**
     * 
     *
     * @param int $outgoingMessageQueueSize
     *
     * @return self
     */
    public function setOutgoingMessageQueueSize(int $outgoingMessageQueueSize) : self
    {
        $this->outgoingMessageQueueSize = $outgoingMessageQueueSize;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getMaxKnownPoints() : array
    {
        return $this->maxKnownPoints;
    }
    /**
     * 
     *
     * @param mixed[] $maxKnownPoints
     *
     * @return self
     */
    public function setMaxKnownPoints(array $maxKnownPoints) : self
    {
        $this->maxKnownPoints = $maxKnownPoints;
        return $this;
    }
    /**
     * max and target size for the known address table.
     *
     * @return mixed[]
     */
    public function getMaxKnownPeerIds() : array
    {
        return $this->maxKnownPeerIds;
    }
    /**
     * max and target size for the known address table.
     *
     * @param mixed[] $maxKnownPeerIds
     *
     * @return self
     */
    public function setMaxKnownPeerIds(array $maxKnownPeerIds) : self
    {
        $this->maxKnownPeerIds = $maxKnownPeerIds;
        return $this;
    }
    /**
     * GC delay for the greylists tables, in seconds.
     *
     * @return mixed
     */
    public function getGreylistTimeout()
    {
        return $this->greylistTimeout;
    }
    /**
     * GC delay for the greylists tables, in seconds.
     *
     * @param mixed $greylistTimeout
     *
     * @return self
     */
    public function setGreylistTimeout($greylistTimeout) : self
    {
        $this->greylistTimeout = $greylistTimeout;
        return $this;
    }
    /**
     * How long to wait at most, in seconds, before running a maintenance loop.
     *
     * @return mixed
     */
    public function getMaintenanceIdleTime()
    {
        return $this->maintenanceIdleTime;
    }
    /**
     * How long to wait at most, in seconds, before running a maintenance loop.
     *
     * @param mixed $maintenanceIdleTime
     *
     * @return self
     */
    public function setMaintenanceIdleTime($maintenanceIdleTime) : self
    {
        $this->maintenanceIdleTime = $maintenanceIdleTime;
        return $this;
    }
}