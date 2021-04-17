<?php

namespace Pezos\Generated\Proto\Model;

class ContextDelegatesPkhGetResponse200
{
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $balance;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $frozenBalance;
    /**
     * 
     *
     * @var ContextDelegatesPkhGetResponse200FrozenBalanceByCycleItem[]
     */
    protected $frozenBalanceByCycle;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $stakingBalance;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $delegatedContracts;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $delegatedBalance;
    /**
     * 
     *
     * @var bool
     */
    protected $deactivated;
    /**
     * 
     *
     * @var int
     */
    protected $gracePeriod;
    /**
     * 
     *
     * @var int
     */
    protected $votingPower;
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getBalance() : string
    {
        return $this->balance;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $balance
     *
     * @return self
     */
    public function setBalance(string $balance) : self
    {
        $this->balance = $balance;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getFrozenBalance() : string
    {
        return $this->frozenBalance;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $frozenBalance
     *
     * @return self
     */
    public function setFrozenBalance(string $frozenBalance) : self
    {
        $this->frozenBalance = $frozenBalance;
        return $this;
    }
    /**
     * 
     *
     * @return ContextDelegatesPkhGetResponse200FrozenBalanceByCycleItem[]
     */
    public function getFrozenBalanceByCycle() : array
    {
        return $this->frozenBalanceByCycle;
    }
    /**
     * 
     *
     * @param ContextDelegatesPkhGetResponse200FrozenBalanceByCycleItem[] $frozenBalanceByCycle
     *
     * @return self
     */
    public function setFrozenBalanceByCycle(array $frozenBalanceByCycle) : self
    {
        $this->frozenBalanceByCycle = $frozenBalanceByCycle;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getStakingBalance() : string
    {
        return $this->stakingBalance;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $stakingBalance
     *
     * @return self
     */
    public function setStakingBalance(string $stakingBalance) : self
    {
        $this->stakingBalance = $stakingBalance;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getDelegatedContracts() : array
    {
        return $this->delegatedContracts;
    }
    /**
     * 
     *
     * @param mixed[] $delegatedContracts
     *
     * @return self
     */
    public function setDelegatedContracts(array $delegatedContracts) : self
    {
        $this->delegatedContracts = $delegatedContracts;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getDelegatedBalance() : string
    {
        return $this->delegatedBalance;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $delegatedBalance
     *
     * @return self
     */
    public function setDelegatedBalance(string $delegatedBalance) : self
    {
        $this->delegatedBalance = $delegatedBalance;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeactivated() : bool
    {
        return $this->deactivated;
    }
    /**
     * 
     *
     * @param bool $deactivated
     *
     * @return self
     */
    public function setDeactivated(bool $deactivated) : self
    {
        $this->deactivated = $deactivated;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGracePeriod() : int
    {
        return $this->gracePeriod;
    }
    /**
     * 
     *
     * @param int $gracePeriod
     *
     * @return self
     */
    public function setGracePeriod(int $gracePeriod) : self
    {
        $this->gracePeriod = $gracePeriod;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVotingPower() : int
    {
        return $this->votingPower;
    }
    /**
     * 
     *
     * @param int $votingPower
     *
     * @return self
     */
    public function setVotingPower(int $votingPower) : self
    {
        $this->votingPower = $votingPower;
        return $this;
    }
}