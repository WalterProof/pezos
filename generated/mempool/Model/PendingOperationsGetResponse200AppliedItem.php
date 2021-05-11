<?php

namespace Bzzhh\Pezos\Generated\Mempool\Model;

class PendingOperationsGetResponse200AppliedItem
{
    /**
     * 
     *
     * @var mixed
     */
    protected $hash;
    /**
     * 
     *
     * @var mixed
     */
    protected $branch;
    /**
     * 
     *
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }
    /**
     * 
     *
     * @param mixed $hash
     *
     * @return self
     */
    public function setHash($hash) : self
    {
        $this->hash = $hash;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getBranch()
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param mixed $branch
     *
     * @return self
     */
    public function setBranch($branch) : self
    {
        $this->branch = $branch;
        return $this;
    }
}