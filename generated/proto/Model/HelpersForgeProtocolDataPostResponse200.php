<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersForgeProtocolDataPostResponse200
{
    /**
     * 
     *
     * @var string
     */
    protected $protocolData;
    /**
     * 
     *
     * @return string
     */
    public function getProtocolData() : string
    {
        return $this->protocolData;
    }
    /**
     * 
     *
     * @param string $protocolData
     *
     * @return self
     */
    public function setProtocolData(string $protocolData) : self
    {
        $this->protocolData = $protocolData;
        return $this;
    }
}