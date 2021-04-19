<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class VotesCurrentPeriodGetResponse200
{
    /**
     * 
     *
     * @var VotesCurrentPeriodGetResponse200VotingPeriod
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
     * @return VotesCurrentPeriodGetResponse200VotingPeriod
     */
    public function getVotingPeriod() : VotesCurrentPeriodGetResponse200VotingPeriod
    {
        return $this->votingPeriod;
    }
    /**
     * 
     *
     * @param VotesCurrentPeriodGetResponse200VotingPeriod $votingPeriod
     *
     * @return self
     */
    public function setVotingPeriod(VotesCurrentPeriodGetResponse200VotingPeriod $votingPeriod) : self
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