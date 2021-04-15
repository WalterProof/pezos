<?php

namespace Pezos\Generated\Shell\Model;

class P2pPeerPoolEvent
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @var mixed
     */
    protected $timestamp;
    /**
     * An address for locating peers.
     *
     * @var mixed
     */
    protected $addr;
    /**
     * 
     *
     * @var int
     */
    protected $port;
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @param mixed $timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * An address for locating peers.
     *
     * @return mixed
     */
    public function getAddr()
    {
        return $this->addr;
    }
    /**
     * An address for locating peers.
     *
     * @param mixed $addr
     *
     * @return self
     */
    public function setAddr($addr) : self
    {
        $this->addr = $addr;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * 
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port) : self
    {
        $this->port = $port;
        return $this;
    }
}