<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class ContextDelegatesPkhFrozenBalanceByCycleGetResponse200Item
{
    /**
     * 
     *
     * @var int
     */
    protected $cycle;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $deposit;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $fees;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $rewards;
    /**
     * 
     *
     * @return int
     */
    public function getCycle() : int
    {
        return $this->cycle;
    }
    /**
     * 
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
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getDeposit() : string
    {
        return $this->deposit;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $deposit
     *
     * @return self
     */
    public function setDeposit(string $deposit) : self
    {
        $this->deposit = $deposit;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getFees() : string
    {
        return $this->fees;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $fees
     *
     * @return self
     */
    public function setFees(string $fees) : self
    {
        $this->fees = $fees;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getRewards() : string
    {
        return $this->rewards;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $rewards
     *
     * @return self
     */
    public function setRewards(string $rewards) : self
    {
        $this->rewards = $rewards;
        return $this;
    }
}