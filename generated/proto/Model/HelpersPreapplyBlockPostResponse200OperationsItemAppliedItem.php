<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem
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
     * @var string
     */
    protected $data;
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
     * @return string
     */
    public function getData() : string
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data) : self
    {
        $this->data = $data;
        return $this;
    }
}