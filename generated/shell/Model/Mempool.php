<?php

namespace Pezos\Generated\Shell\Model;

class Mempool
{
    /**
     * 
     *
     * @var mixed[]
     */
    protected $knownValid;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $pending;
    /**
     * 
     *
     * @return mixed[]
     */
    public function getKnownValid() : array
    {
        return $this->knownValid;
    }
    /**
     * 
     *
     * @param mixed[] $knownValid
     *
     * @return self
     */
    public function setKnownValid(array $knownValid) : self
    {
        $this->knownValid = $knownValid;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getPending() : array
    {
        return $this->pending;
    }
    /**
     * 
     *
     * @param mixed[] $pending
     *
     * @return self
     */
    public function setPending(array $pending) : self
    {
        $this->pending = $pending;
        return $this;
    }
}