<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200ShellPeerValidator
{
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $blockHeaderRequestTimeout;
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $blockOperationsRequestTimeout;
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $protocolRequestTimeout;
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $newHeadRequestTimeout;
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
    public function getBlockHeaderRequestTimeout() : int
    {
        return $this->blockHeaderRequestTimeout;
    }
    /**
     * A span of time, as seen by the local computer.
     *
     * @param int $blockHeaderRequestTimeout
     *
     * @return self
     */
    public function setBlockHeaderRequestTimeout(int $blockHeaderRequestTimeout) : self
    {
        $this->blockHeaderRequestTimeout = $blockHeaderRequestTimeout;
        return $this;
    }
    /**
     * A span of time, as seen by the local computer.
     *
     * @return int
     */
    public function getBlockOperationsRequestTimeout() : int
    {
        return $this->blockOperationsRequestTimeout;
    }
    /**
     * A span of time, as seen by the local computer.
     *
     * @param int $blockOperationsRequestTimeout
     *
     * @return self
     */
    public function setBlockOperationsRequestTimeout(int $blockOperationsRequestTimeout) : self
    {
        $this->blockOperationsRequestTimeout = $blockOperationsRequestTimeout;
        return $this;
    }
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
     * A span of time, as seen by the local computer.
     *
     * @return int
     */
    public function getNewHeadRequestTimeout() : int
    {
        return $this->newHeadRequestTimeout;
    }
    /**
     * A span of time, as seen by the local computer.
     *
     * @param int $newHeadRequestTimeout
     *
     * @return self
     */
    public function setNewHeadRequestTimeout(int $newHeadRequestTimeout) : self
    {
        $this->newHeadRequestTimeout = $newHeadRequestTimeout;
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