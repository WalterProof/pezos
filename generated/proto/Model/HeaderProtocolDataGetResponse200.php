<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HeaderProtocolDataGetResponse200
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
    protected $content;
    /**
     * 
     *
     * @var mixed
     */
    protected $signature;
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
    public function getContent()
    {
        return $this->content;
    }
    /**
     * 
     *
     * @param mixed $content
     *
     * @return self
     */
    public function setContent($content) : self
    {
        $this->content = $content;
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