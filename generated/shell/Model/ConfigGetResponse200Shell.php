<?php

namespace Pezos\Generated\Shell\Model;

class ConfigGetResponse200Shell
{
    /**
     * 
     *
     * @var ConfigGetResponse200ShellPeerValidator
     */
    protected $peerValidator;
    /**
     * 
     *
     * @var ConfigGetResponse200ShellBlockValidator
     */
    protected $blockValidator;
    /**
     * 
     *
     * @var ConfigGetResponse200ShellPrevalidator
     */
    protected $prevalidator;
    /**
     * 
     *
     * @var mixed
     */
    protected $chainValidator;
    /**
     * 
     *
     * @var string
     */
    protected $historyMode;
    /**
     * 
     *
     * @return ConfigGetResponse200ShellPeerValidator
     */
    public function getPeerValidator() : ConfigGetResponse200ShellPeerValidator
    {
        return $this->peerValidator;
    }
    /**
     * 
     *
     * @param ConfigGetResponse200ShellPeerValidator $peerValidator
     *
     * @return self
     */
    public function setPeerValidator(ConfigGetResponse200ShellPeerValidator $peerValidator) : self
    {
        $this->peerValidator = $peerValidator;
        return $this;
    }
    /**
     * 
     *
     * @return ConfigGetResponse200ShellBlockValidator
     */
    public function getBlockValidator() : ConfigGetResponse200ShellBlockValidator
    {
        return $this->blockValidator;
    }
    /**
     * 
     *
     * @param ConfigGetResponse200ShellBlockValidator $blockValidator
     *
     * @return self
     */
    public function setBlockValidator(ConfigGetResponse200ShellBlockValidator $blockValidator) : self
    {
        $this->blockValidator = $blockValidator;
        return $this;
    }
    /**
     * 
     *
     * @return ConfigGetResponse200ShellPrevalidator
     */
    public function getPrevalidator() : ConfigGetResponse200ShellPrevalidator
    {
        return $this->prevalidator;
    }
    /**
     * 
     *
     * @param ConfigGetResponse200ShellPrevalidator $prevalidator
     *
     * @return self
     */
    public function setPrevalidator(ConfigGetResponse200ShellPrevalidator $prevalidator) : self
    {
        $this->prevalidator = $prevalidator;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getChainValidator()
    {
        return $this->chainValidator;
    }
    /**
     * 
     *
     * @param mixed $chainValidator
     *
     * @return self
     */
    public function setChainValidator($chainValidator) : self
    {
        $this->chainValidator = $chainValidator;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHistoryMode() : string
    {
        return $this->historyMode;
    }
    /**
     * 
     *
     * @param string $historyMode
     *
     * @return self
     */
    public function setHistoryMode(string $historyMode) : self
    {
        $this->historyMode = $historyMode;
        return $this;
    }
}