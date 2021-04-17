<?php

namespace Pezos\Generated\Proto\Model;

class ContextContractsContractIdGetResponse200
{
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $balance;
    /**
     * 
     *
     * @var mixed
     */
    protected $delegate;
    /**
     * 
     *
     * @var _008PtEdo2ZkScriptedContracts
     */
    protected $script;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $counter;
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
     * 
     *
     * @return mixed
     */
    public function getDelegate()
    {
        return $this->delegate;
    }
    /**
     * 
     *
     * @param mixed $delegate
     *
     * @return self
     */
    public function setDelegate($delegate) : self
    {
        $this->delegate = $delegate;
        return $this;
    }
    /**
     * 
     *
     * @return _008PtEdo2ZkScriptedContracts
     */
    public function getScript() : _008PtEdo2ZkScriptedContracts
    {
        return $this->script;
    }
    /**
     * 
     *
     * @param _008PtEdo2ZkScriptedContracts $script
     *
     * @return self
     */
    public function setScript(_008PtEdo2ZkScriptedContracts $script) : self
    {
        $this->script = $script;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getCounter() : string
    {
        return $this->counter;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $counter
     *
     * @return self
     */
    public function setCounter(string $counter) : self
    {
        $this->counter = $counter;
        return $this;
    }
}