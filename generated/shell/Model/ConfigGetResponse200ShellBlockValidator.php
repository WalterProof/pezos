<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200ShellBlockValidator
{
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $protocolRequestTimeout;
    /**
     * 
     *
     * @var int
     */
    protected $workerBacklogSize;
    /**
     * 
     *
     * @var string
     */
    protected $workerBacklogLevel;
    /**
     * A span of time, as seen by the local computer.
     *
     * @return int
     */
    public function getProtocolRequestTimeout() : int
    {
        return $this->protocolRequestTimeout;
    }
    /**
     * A span of time, as seen by the local computer.
     *
     * @param int $protocolRequestTimeout
     *
     * @return self
     */
    public function setProtocolRequestTimeout(int $protocolRequestTimeout) : self
    {
        $this->protocolRequestTimeout = $protocolRequestTimeout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWorkerBacklogSize() : int
    {
        return $this->workerBacklogSize;
    }
    /**
     * 
     *
     * @param int $workerBacklogSize
     *
     * @return self
     */
    public function setWorkerBacklogSize(int $workerBacklogSize) : self
    {
        $this->workerBacklogSize = $workerBacklogSize;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWorkerBacklogLevel() : string
    {
        return $this->workerBacklogLevel;
    }
    /**
     * 
     *
     * @param string $workerBacklogLevel
     *
     * @return self
     */
    public function setWorkerBacklogLevel(string $workerBacklogLevel) : self
    {
        $this->workerBacklogLevel = $workerBacklogLevel;
        return $this;
    }
}