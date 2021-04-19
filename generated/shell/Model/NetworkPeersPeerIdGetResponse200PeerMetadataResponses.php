<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdGetResponse200PeerMetadataResponses
{
    /**
     * 
     *
     * @var mixed
     */
    protected $sent;
    /**
     * 
     *
     * @var mixed
     */
    protected $failed;
    /**
     * 
     *
     * @var mixed
     */
    protected $received;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $unexpected;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $outdated;
    /**
     * 
     *
     * @return mixed
     */
    public function getSent()
    {
        return $this->sent;
    }
    /**
     * 
     *
     * @param mixed $sent
     *
     * @return self
     */
    public function setSent($sent) : self
    {
        $this->sent = $sent;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getFailed()
    {
        return $this->failed;
    }
    /**
     * 
     *
     * @param mixed $failed
     *
     * @return self
     */
    public function setFailed($failed) : self
    {
        $this->failed = $failed;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getReceived()
    {
        return $this->received;
    }
    /**
     * 
     *
     * @param mixed $received
     *
     * @return self
     */
    public function setReceived($received) : self
    {
        $this->received = $received;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getUnexpected() : string
    {
        return $this->unexpected;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $unexpected
     *
     * @return self
     */
    public function setUnexpected(string $unexpected) : self
    {
        $this->unexpected = $unexpected;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getOutdated() : string
    {
        return $this->outdated;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $outdated
     *
     * @return self
     */
    public function setOutdated(string $outdated) : self
    {
        $this->outdated = $outdated;
        return $this;
    }
}