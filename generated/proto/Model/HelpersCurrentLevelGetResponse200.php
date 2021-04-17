<?php

namespace Pezos\Generated\Proto\Model;

class HelpersCurrentLevelGetResponse200
{
    /**
     * The level of the block relative to genesis. This is also the Shell's notion of level
     *
     * @var int
     */
    protected $level;
    /**
     * The level of the block relative to the block that starts protocol alpha. This is specific to the protocol alpha. Other protocols might or might not include a similar notion.
     *
     * @var int
     */
    protected $levelPosition;
    /**
     * The current cycle's number. Note that cycles are a protocol-specific notion. As a result, the cycle number starts at 0 with the first block of protocol alpha.
     *
     * @var int
     */
    protected $cycle;
    /**
     * The current level of the block relative to the first block of the current cycle.
     *
     * @var int
     */
    protected $cyclePosition;
    /**
     * The current voting period's index. Note that cycles are a protocol-specific notion. As a result, the voting period index starts at 0 with the first block of protocol alpha. This field is DEPRECATED: use `..<block_id>/votes/voting_period` RPC instead.
     *
     * @var int
     */
    protected $votingPeriod;
    /**
     * The current level of the block relative to the first block of the current voting period. This field is DEPRECATED: use `..<block_id>/votes/voting_period` RPC instead.
     *
     * @var int
     */
    protected $votingPeriodPosition;
    /**
     * Tells wether the baker of this block has to commit a seed nonce hash.
     *
     * @var bool
     */
    protected $expectedCommitment;
    /**
     * The level of the block relative to genesis. This is also the Shell's notion of level
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }
    /**
     * The level of the block relative to genesis. This is also the Shell's notion of level
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
     * The level of the block relative to the block that starts protocol alpha. This is specific to the protocol alpha. Other protocols might or might not include a similar notion.
     *
     * @return int
     */
    public function getLevelPosition() : int
    {
        return $this->levelPosition;
    }
    /**
     * The level of the block relative to the block that starts protocol alpha. This is specific to the protocol alpha. Other protocols might or might not include a similar notion.
     *
     * @param int $levelPosition
     *
     * @return self
     */
    public function setLevelPosition(int $levelPosition) : self
    {
        $this->levelPosition = $levelPosition;
        return $this;
    }
    /**
     * The current cycle's number. Note that cycles are a protocol-specific notion. As a result, the cycle number starts at 0 with the first block of protocol alpha.
     *
     * @return int
     */
    public function getCycle() : int
    {
        return $this->cycle;
    }
    /**
     * The current cycle's number. Note that cycles are a protocol-specific notion. As a result, the cycle number starts at 0 with the first block of protocol alpha.
     *
     * @param int $cycle
     *
     * @return self
     */
    public function setCycle(int $cycle) : self
    {
        $this->cycle = $cycle;
        return $this;
    }
    /**
     * The current level of the block relative to the first block of the current cycle.
     *
     * @return int
     */
    public function getCyclePosition() : int
    {
        return $this->cyclePosition;
    }
    /**
     * The current level of the block relative to the first block of the current cycle.
     *
     * @param int $cyclePosition
     *
     * @return self
     */
    public function setCyclePosition(int $cyclePosition) : self
    {
        $this->cyclePosition = $cyclePosition;
        return $this;
    }
    /**
     * The current voting period's index. Note that cycles are a protocol-specific notion. As a result, the voting period index starts at 0 with the first block of protocol alpha. This field is DEPRECATED: use `..<block_id>/votes/voting_period` RPC instead.
     *
     * @return int
     */
    public function getVotingPeriod() : int
    {
        return $this->votingPeriod;
    }
    /**
     * The current voting period's index. Note that cycles are a protocol-specific notion. As a result, the voting period index starts at 0 with the first block of protocol alpha. This field is DEPRECATED: use `..<block_id>/votes/voting_period` RPC instead.
     *
     * @param int $votingPeriod
     *
     * @return self
     */
    public function setVotingPeriod(int $votingPeriod) : self
    {
        $this->votingPeriod = $votingPeriod;
        return $this;
    }
    /**
     * The current level of the block relative to the first block of the current voting period. This field is DEPRECATED: use `..<block_id>/votes/voting_period` RPC instead.
     *
     * @return int
     */
    public function getVotingPeriodPosition() : int
    {
        return $this->votingPeriodPosition;
    }
    /**
     * The current level of the block relative to the first block of the current voting period. This field is DEPRECATED: use `..<block_id>/votes/voting_period` RPC instead.
     *
     * @param int $votingPeriodPosition
     *
     * @return self
     */
    public function setVotingPeriodPosition(int $votingPeriodPosition) : self
    {
        $this->votingPeriodPosition = $votingPeriodPosition;
        return $this;
    }
    /**
     * Tells wether the baker of this block has to commit a seed nonce hash.
     *
     * @return bool
     */
    public function getExpectedCommitment() : bool
    {
        return $this->expectedCommitment;
    }
    /**
     * Tells wether the baker of this block has to commit a seed nonce hash.
     *
     * @param bool $expectedCommitment
     *
     * @return self
     */
    public function setExpectedCommitment(bool $expectedCommitment) : self
    {
        $this->expectedCommitment = $expectedCommitment;
        return $this;
    }
}