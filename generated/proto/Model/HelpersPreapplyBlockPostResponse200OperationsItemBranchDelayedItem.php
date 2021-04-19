<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem
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
     * The full list of error is available with the global RPC `GET errors`
     *
     * @var mixed
     */
    protected $error;
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
    /**
     * The full list of error is available with the global RPC `GET errors`
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * The full list of error is available with the global RPC `GET errors`
     *
     * @param mixed $error
     *
     * @return self
     */
    public function setError($error) : self
    {
        $this->error = $error;
        return $this;
    }
}