<?php

namespace Pezos\Generated\Shell\Model;

class WorkersPrevalidatorsGetResponse200ItemInformation
{
    /**
     * 
     *
     * @var int
     */
    protected $instances;
    /**
     * 
     *
     * @var mixed
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $queueLength;
    /**
     * 
     *
     * @return int
     */
    public function getInstances() : int
    {
        return $this->instances;
    }
    /**
     * 
     *
     * @param int $instances
     *
     * @return self
     */
    public function setInstances(int $instances) : self
    {
        $this->instances = $instances;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param mixed $status
     *
     * @return self
     */
    public function setStatus($status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQueueLength() : int
    {
        return $this->queueLength;
    }
    /**
     * 
     *
     * @param int $queueLength
     *
     * @return self
     */
    public function setQueueLength(int $queueLength) : self
    {
        $this->queueLength = $queueLength;
        return $this;
    }
}