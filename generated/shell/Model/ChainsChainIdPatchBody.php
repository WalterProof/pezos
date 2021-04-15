<?php

namespace Pezos\Generated\Shell\Model;

class ChainsChainIdPatchBody
{
    /**
     * 
     *
     * @var bool
     */
    protected $bootstrapped;
    /**
     * 
     *
     * @return bool
     */
    public function getBootstrapped() : bool
    {
        return $this->bootstrapped;
    }
    /**
     * 
     *
     * @param bool $bootstrapped
     *
     * @return self
     */
    public function setBootstrapped(bool $bootstrapped) : self
    {
        $this->bootstrapped = $bootstrapped;
        return $this;
    }
}