<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsTraceCodePostBody
{
    /**
     * 
     *
     * @var mixed
     */
    protected $script;
    /**
     * 
     *
     * @var mixed
     */
    protected $storage;
    /**
     * 
     *
     * @var mixed
     */
    protected $input;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $amount;
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
    protected $chainId;
    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash or a base58 originated contract hash.
     *
     * @var mixed
     */
    protected $source;
    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash or a base58 originated contract hash.
     *
     * @var mixed
     */
    protected $payer;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $gas;
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @var mixed
     */
    protected $entrypoint;
    /**
     * 
     *
     * @var mixed
     */
    protected $unparsingMode;
    /**
     * 
     *
     * @return mixed
     */
    public function getScript()
    {
        return $this->script;
    }
    /**
     * 
     *
     * @param mixed $script
     *
     * @return self
     */
    public function setScript($script) : self
    {
        $this->script = $script;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getStorage()
    {
        return $this->storage;
    }
    /**
     * 
     *
     * @param mixed $storage
     *
     * @return self
     */
    public function setStorage($storage) : self
    {
        $this->storage = $storage;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }
    /**
     * 
     *
     * @param mixed $input
     *
     * @return self
     */
    public function setInput($input) : self
    {
        $this->input = $input;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getAmount() : string
    {
        return $this->amount;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(string $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
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
    public function getChainId()
    {
        return $this->chainId;
    }
    /**
     * 
     *
     * @param mixed $chainId
     *
     * @return self
     */
    public function setChainId($chainId) : self
    {
        $this->chainId = $chainId;
        return $this;
    }
    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash or a base58 originated contract hash.
     *
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash or a base58 originated contract hash.
     *
     * @param mixed $source
     *
     * @return self
     */
    public function setSource($source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash or a base58 originated contract hash.
     *
     * @return mixed
     */
    public function getPayer()
    {
        return $this->payer;
    }
    /**
     * A contract notation as given to an RPC or inside scripts. Can be a base58 implicit contract hash or a base58 originated contract hash.
     *
     * @param mixed $payer
     *
     * @return self
     */
    public function setPayer($payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getGas() : string
    {
        return $this->gas;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $gas
     *
     * @return self
     */
    public function setGas(string $gas) : self
    {
        $this->gas = $gas;
        return $this;
    }
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @return mixed
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @param mixed $entrypoint
     *
     * @return self
     */
    public function setEntrypoint($entrypoint) : self
    {
        $this->entrypoint = $entrypoint;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getUnparsingMode()
    {
        return $this->unparsingMode;
    }
    /**
     * 
     *
     * @param mixed $unparsingMode
     *
     * @return self
     */
    public function setUnparsingMode($unparsingMode) : self
    {
        $this->unparsingMode = $unparsingMode;
        return $this;
    }
}