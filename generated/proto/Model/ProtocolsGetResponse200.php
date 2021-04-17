<?php

namespace Pezos\Generated\Proto\Model;

class ProtocolsGetResponse200
{
    /**
     * 
     *
     * @var mixed
     */
    protected $protocol;
    /**
     * 
     *
     * @var mixed
     */
    protected $nextProtocol;
    /**
     * 
     *
     * @return mixed
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
    /**
     * 
     *
     * @param mixed $protocol
     *
     * @return self
     */
    public function setProtocol($protocol) : self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getNextProtocol()
    {
        return $this->nextProtocol;
    }
    /**
     * 
     *
     * @param mixed $nextProtocol
     *
     * @return self
     */
    public function setNextProtocol($nextProtocol) : self
    {
        $this->nextProtocol = $nextProtocol;
        return $this;
    }
}