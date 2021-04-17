<?php

namespace Pezos\Generated\Proto\Model;

class VotesSuccessorPeriodGetResponse200VotingPeriod
{
    /**
     * The voting period's index. Starts at 0 with the first block of protocol alpha.
     *
     * @var int
     */
    protected $index;
    /**
     * 
     *
     * @var mixed
     */
    protected $kind;
    /**
     * 
     *
     * @var int
     */
    protected $startPosition;
    /**
     * The voting period's index. Starts at 0 with the first block of protocol alpha.
     *
     * @return int
     */
    public function getIndex() : int
    {
        return $this->index;
    }
    /**
     * The voting period's index. Starts at 0 with the first block of protocol alpha.
     *
     * @param int $index
     *
     * @return self
     */
    public function setIndex(int $index) : self
    {
        $this->index = $index;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param mixed $kind
     *
     * @return self
     */
    public function setKind($kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStartPosition() : int
    {
        return $this->startPosition;
    }
    /**
     * 
     *
     * @param int $startPosition
     *
     * @return self
     */
    public function setStartPosition(int $startPosition) : self
    {
        $this->startPosition = $startPosition;
        return $this;
    }
}