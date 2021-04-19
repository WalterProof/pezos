<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class ContextContractsContractIdEntrypointsGetResponse200UnreachableItem
{
    /**
     * 
     *
     * @var string[]
     */
    protected $path;
    /**
     * 
     *
     * @return string[]
     */
    public function getPath() : array
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string[] $path
     *
     * @return self
     */
    public function setPath(array $path) : self
    {
        $this->path = $path;
        return $this;
    }
}