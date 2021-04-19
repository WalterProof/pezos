<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsEntrypointsPostResponse200
{
    /**
     * 
     *
     * @var HelpersScriptsEntrypointsPostResponse200UnreachableItem[]
     */
    protected $unreachable;
    /**
     * 
     *
     * @var HelpersScriptsEntrypointsPostResponse200Entrypoints
     */
    protected $entrypoints;
    /**
     * 
     *
     * @return HelpersScriptsEntrypointsPostResponse200UnreachableItem[]
     */
    public function getUnreachable() : array
    {
        return $this->unreachable;
    }
    /**
     * 
     *
     * @param HelpersScriptsEntrypointsPostResponse200UnreachableItem[] $unreachable
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
     * @return HelpersScriptsEntrypointsPostResponse200Entrypoints
     */
    public function getEntrypoints() : HelpersScriptsEntrypointsPostResponse200Entrypoints
    {
        return $this->entrypoints;
    }
    /**
     * 
     *
     * @param HelpersScriptsEntrypointsPostResponse200Entrypoints $entrypoints
     *
     * @return self
     */
    public function setEntrypoints(HelpersScriptsEntrypointsPostResponse200Entrypoints $entrypoints) : self
    {
        $this->entrypoints = $entrypoints;
        return $this;
    }
}