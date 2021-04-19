<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdGetResponse200PeerMetadataRequests
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
    protected $received;
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
    protected $scheduled;
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
    public function getScheduled()
    {
        return $this->scheduled;
    }
    /**
     * 
     *
     * @param mixed $scheduled
     *
     * @return self
     */
    public function setScheduled($scheduled) : self
    {
        $this->scheduled = $scheduled;
        return $this;
    }
}