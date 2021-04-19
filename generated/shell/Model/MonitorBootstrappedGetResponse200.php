<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class MonitorBootstrappedGetResponse200
{
    /**
     * 
     *
     * @var mixed
     */
    protected $block;
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @var mixed
     */
    protected $timestamp;
    /**
     * 
     *
     * @return mixed
     */
    public function getBlock()
    {
        return $this->block;
    }
    /**
     * 
     *
     * @param mixed $block
     *
     * @return self
     */
    public function setBlock($block) : self
    {
        $this->block = $block;
        return $this;
    }
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
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
}