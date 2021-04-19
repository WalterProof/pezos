<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersChainValidatorsChainIdDdbGetResponse200OperationsDb
{
    /**
     * 
     *
     * @var int
     */
    protected $tableLength;
    /**
     * 
     *
     * @var int
     */
    protected $schedulerLength;
    /**
     * 
     *
     * @return int
     */
    public function getTableLength() : int
    {
        return $this->tableLength;
    }
    /**
     * 
     *
     * @param int $tableLength
     *
     * @return self
     */
    public function setTableLength(int $tableLength) : self
    {
        $this->tableLength = $tableLength;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSchedulerLength() : int
    {
        return $this->schedulerLength;
    }
    /**
     * 
     *
     * @param int $schedulerLength
     *
     * @return self
     */
    public function setSchedulerLength(int $schedulerLength) : self
    {
        $this->schedulerLength = $schedulerLength;
        return $this;
    }
}