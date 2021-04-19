<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class VotesSuccessorPeriodGetResponse200
{
    /**
     * 
     *
     * @var VotesSuccessorPeriodGetResponse200VotingPeriod
     */
    protected $votingPeriod;
    /**
     * 
     *
     * @var int
     */
    protected $position;
    /**
     * 
     *
     * @var int
     */
    protected $remaining;
    /**
     * 
     *
     * @return VotesSuccessorPeriodGetResponse200VotingPeriod
     */
    public function getVotingPeriod() : VotesSuccessorPeriodGetResponse200VotingPeriod
    {
        return $this->votingPeriod;
    }
    /**
     * 
     *
     * @param VotesSuccessorPeriodGetResponse200VotingPeriod $votingPeriod
     *
     * @return self
     */
    public function setVotingPeriod(VotesSuccessorPeriodGetResponse200VotingPeriod $votingPeriod) : self
    {
        $this->votingPeriod = $votingPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPosition() : int
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRemaining() : int
    {
        return $this->remaining;
    }
    /**
     * 
     *
     * @param int $remaining
     *
     * @return self
     */
    public function setRemaining(int $remaining) : self
    {
        $this->remaining = $remaining;
        return $this;
    }
}