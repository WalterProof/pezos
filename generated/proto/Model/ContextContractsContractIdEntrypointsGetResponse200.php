<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class ContextContractsContractIdEntrypointsGetResponse200
{
    /**
     * 
     *
     * @var ContextContractsContractIdEntrypointsGetResponse200UnreachableItem[]
     */
    protected $unreachable;
    /**
     * 
     *
     * @var ContextContractsContractIdEntrypointsGetResponse200Entrypoints
     */
    protected $entrypoints;
    /**
     * 
     *
     * @return ContextContractsContractIdEntrypointsGetResponse200UnreachableItem[]
     */
    public function getUnreachable() : array
    {
        return $this->unreachable;
    }
    /**
     * 
     *
     * @param ContextContractsContractIdEntrypointsGetResponse200UnreachableItem[] $unreachable
     *
     * @return self
     */
    public function setUnreachable(array $unreachable) : self
    {
        $this->unreachable = $unreachable;
        return $this;
    }
    /**
     * 
     *
     * @return ContextContractsContractIdEntrypointsGetResponse200Entrypoints
     */
    public function getEntrypoints() : ContextContractsContractIdEntrypointsGetResponse200Entrypoints
    {
        return $this->entrypoints;
    }
    /**
     * 
     *
     * @param ContextContractsContractIdEntrypointsGetResponse200Entrypoints $entrypoints
     *
     * @return self
     */
    public function setEntrypoints(ContextContractsContractIdEntrypointsGetResponse200Entrypoints $entrypoints) : self
    {
        $this->entrypoints = $entrypoints;
        return $this;
    }
}