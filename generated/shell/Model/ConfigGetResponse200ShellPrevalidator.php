<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200ShellPrevalidator
{
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $operationsRequestTimeout;
    /**
     * 
     *
     * @var int
     */
    protected $maxRefusedOperations;
    /**
     * 
     *
     * @var int
     */
    protected $operationsBatchSize;
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
    public function getOperationsRequestTimeout() : int
    {
        return $this->operationsRequestTimeout;
    }
    /**
     * A span of time, as seen by the local computer.
     *
     * @param int $operationsRequestTimeout
     *
     * @return self
     */
    public function setOperationsRequestTimeout(int $operationsRequestTimeout) : self
    {
        $this->operationsRequestTimeout = $operationsRequestTimeout;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxRefusedOperations() : int
    {
        return $this->maxRefusedOperations;
    }
    /**
     * 
     *
     * @param int $maxRefusedOperations
     *
     * @return self
     */
    public function setMaxRefusedOperations(int $maxRefusedOperations) : self
    {
        $this->maxRefusedOperations = $maxRefusedOperations;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOperationsBatchSize() : int
    {
        return $this->operationsBatchSize;
    }
    /**
     * 
     *
     * @param int $operationsBatchSize
     *
     * @return self
     */
    public function setOperationsBatchSize(int $operationsBatchSize) : self
    {
        $this->operationsBatchSize = $operationsBatchSize;
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