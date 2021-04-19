<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostBody
{
    /**
     * 
     *
     * @var HelpersPreapplyBlockPostBodyProtocolData
     */
    protected $protocolData;
    /**
     * 
     *
     * @var NextOperation[][]
     */
    protected $operations;
    /**
     * 
     *
     * @return HelpersPreapplyBlockPostBodyProtocolData
     */
    public function getProtocolData() : HelpersPreapplyBlockPostBodyProtocolData
    {
        return $this->protocolData;
    }
    /**
     * 
     *
     * @param HelpersPreapplyBlockPostBodyProtocolData $protocolData
     *
     * @return self
     */
    public function setProtocolData(HelpersPreapplyBlockPostBodyProtocolData $protocolData) : self
    {
        $this->protocolData = $protocolData;
        return $this;
    }
    /**
     * 
     *
     * @return NextOperation[][]
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param NextOperation[][] $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
}