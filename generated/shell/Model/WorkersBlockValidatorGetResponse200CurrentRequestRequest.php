<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersBlockValidatorGetResponse200CurrentRequestRequest
{
    /**
     * 
     *
     * @var mixed
     */
    protected $block;
    /**
     * 
     *
     * @var mixed
     */
    protected $chainId;
    /**
     * 
     *
     * @var mixed
     */
    protected $peer;
    /**
     * 
     *
     * @return mixed
     */
    public function getBlock()
    {
        return $this->block;
    }
    /**
     * 
     *
     * @param mixed $block
     *
     * @return self
     */
    public function setBlock($block) : self
    {
        $this->block = $block;
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
     * 
     *
     * @return mixed
     */
    public function getPeer()
    {
        return $this->peer;
    }
    /**
     * 
     *
     * @param mixed $peer
     *
     * @return self
     */
    public function setPeer($peer) : self
    {
        $this->peer = $peer;
        return $this;
    }
}