<?php

namespace Pezos\Generated\Shell\Model;

class ConfigGetResponse200InternalEvents
{
    /**
     * List of URIs to activate/configure sinks.
     *
     * @var mixed[]
     */
    protected $activate;
    /**
     * List of URIs to activate/configure sinks.
     *
     * @return mixed[]
     */
    public function getActivate() : array
    {
        return $this->activate;
    }
    /**
     * List of URIs to activate/configure sinks.
     *
     * @param mixed[] $activate
     *
     * @return self
     */
    public function setActivate(array $activate) : self
    {
        $this->activate = $activate;
        return $this;
    }
}