<?php

namespace Bzzhh\Pezos\Generated\Mempool\Model;

class NextOperation
{
    /**
     * 
     *
     * @var string
     */
    protected $protocol;
    /**
     * 
     *
     * @var mixed
     */
    protected $branch;
    /**
     * 
     *
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }
    /**
     * 
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol) : self
    {
        $this->protocol = $protocol;
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