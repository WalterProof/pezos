<?php

namespace Pezos\Generated\Proto\Model;

class HelpersBakingRightsGetResponse200Item
{
    /**
     * 
     *
     * @var int
     */
    protected $level;
    /**
     * 
     *
     * @var mixed
     */
    protected $delegate;
    /**
     * 
     *
     * @var int
     */
    protected $priority;
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @var mixed
     */
    protected $estimatedTime;
    /**
     * 
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }
    /**
     * 
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDelegate()
    {
        return $this->delegate;
    }
    /**
     * 
     *
     * @param mixed $delegate
     *
     * @return self
     */
    public function setDelegate($delegate) : self
    {
        $this->delegate = $delegate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @return mixed
     */
    public function getEstimatedTime()
    {
        return $this->estimatedTime;
    }
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @param mixed $estimatedTime
     *
     * @return self
     */
    public function setEstimatedTime($estimatedTime) : self
    {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }
}