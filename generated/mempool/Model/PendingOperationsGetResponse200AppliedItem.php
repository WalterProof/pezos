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
     * @var mixed[]
     */
    protected $contents;
    /**
     * 
     *
     * @var mixed
     */
    protected $signature;
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
    /**
     * 
     *
     * @return mixed[]
     */
    public function getContents() : array
    {
        return $this->contents;
    }
    /**
     * 
     *
     * @param mixed[] $contents
     *
     * @return self
     */
    public function setContents(array $contents) : self
    {
        $this->contents = $contents;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
    }
    /**
     * 
     *
     * @param mixed $signature
     *
     * @return self
     */
    public function setSignature($signature) : self
    {
        $this->signature = $signature;
        return $this;
    }
}