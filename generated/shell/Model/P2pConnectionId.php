<?php

namespace Pezos\Generated\Shell\Model;

class P2pConnectionId
{
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