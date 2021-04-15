<?php

namespace Pezos\Generated\Shell\Model;

class Protocol
{
    /**
     * 
     *
     * @var int
     */
    protected $expectedEnvVersion;
    /**
     * 
     *
     * @var ProtocolComponentsItem[]
     */
    protected $components;
    /**
     * 
     *
     * @return int
     */
    public function getExpectedEnvVersion() : int
    {
        return $this->expectedEnvVersion;
    }
    /**
     * 
     *
     * @param int $expectedEnvVersion
     *
     * @return self
     */
    public function setExpectedEnvVersion(int $expectedEnvVersion) : self
    {
        $this->expectedEnvVersion = $expectedEnvVersion;
        return $this;
    }
    /**
     * 
     *
     * @return ProtocolComponentsItem[]
     */
    public function getComponents() : array
    {
        return $this->components;
    }
    /**
     * 
     *
     * @param ProtocolComponentsItem[] $components
     *
     * @return self
     */
    public function setComponents(array $components) : self
    {
        $this->components = $components;
        return $this;
    }
}