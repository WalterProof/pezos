<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200P2pGreylistingConfig
{
    /**
     * The factor by which the reconnection delay is increased when a peer that was previously disconnected is disconnected again. This value should be set to 1 for a linear back-off and to >1 for an exponential back-off.
     *
     * @var int
     */
    protected $factor;
    /**
     * The span of time a peer is disconnected for when it is first disconnected.
     *
     * @var mixed
     */
    protected $initialDelay;
    /**
     * The span of time a peer is disconnected for when it is disconnected as the result of an error.
     *
     * @var mixed
     */
    protected $disconnectionDelay;
    /**
     * The maximum amount by which the reconnection is extended. This limits the rate of the exponential back-off, which eventually becomes linear when it reaches this limit. This limit is set to avoid reaching the End-of-Time when repeatedly reconnection a peer.
     *
     * @var mixed
     */
    protected $increaseCap;
    /**
     * The factor by which the reconnection delay is increased when a peer that was previously disconnected is disconnected again. This value should be set to 1 for a linear back-off and to >1 for an exponential back-off.
     *
     * @return int
     */
    public function getFactor() : int
    {
        return $this->factor;
    }
    /**
     * The factor by which the reconnection delay is increased when a peer that was previously disconnected is disconnected again. This value should be set to 1 for a linear back-off and to >1 for an exponential back-off.
     *
     * @param int $factor
     *
     * @return self
     */
    public function setFactor(int $factor) : self
    {
        $this->factor = $factor;
        return $this;
    }
    /**
     * The span of time a peer is disconnected for when it is first disconnected.
     *
     * @return mixed
     */
    public function getInitialDelay()
    {
        return $this->initialDelay;
    }
    /**
     * The span of time a peer is disconnected for when it is first disconnected.
     *
     * @param mixed $initialDelay
     *
     * @return self
     */
    public function setInitialDelay($initialDelay) : self
    {
        $this->initialDelay = $initialDelay;
        return $this;
    }
    /**
     * The span of time a peer is disconnected for when it is disconnected as the result of an error.
     *
     * @return mixed
     */
    public function getDisconnectionDelay()
    {
        return $this->disconnectionDelay;
    }
    /**
     * The span of time a peer is disconnected for when it is disconnected as the result of an error.
     *
     * @param mixed $disconnectionDelay
     *
     * @return self
     */
    public function setDisconnectionDelay($disconnectionDelay) : self
    {
        $this->disconnectionDelay = $disconnectionDelay;
        return $this;
    }
    /**
     * The maximum amount by which the reconnection is extended. This limits the rate of the exponential back-off, which eventually becomes linear when it reaches this limit. This limit is set to avoid reaching the End-of-Time when repeatedly reconnection a peer.
     *
     * @return mixed
     */
    public function getIncreaseCap()
    {
        return $this->increaseCap;
    }
    /**
     * The maximum amount by which the reconnection is extended. This limits the rate of the exponential back-off, which eventually becomes linear when it reaches this limit. This limit is set to avoid reaching the End-of-Time when repeatedly reconnection a peer.
     *
     * @param mixed $increaseCap
     *
     * @return self
     */
    public function setIncreaseCap($increaseCap) : self
    {
        $this->increaseCap = $increaseCap;
        return $this;
    }
}