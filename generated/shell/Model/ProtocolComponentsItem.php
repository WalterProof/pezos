<?php

namespace Pezos\Generated\Shell\Model;

class ProtocolComponentsItem
{
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @var mixed
     */
    protected $name;
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @var mixed
     */
    protected $interface;
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @var mixed
     */
    protected $implementation;
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @return mixed
     */
    public function getInterface()
    {
        return $this->interface;
    }
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @param mixed $interface
     *
     * @return self
     */
    public function setInterface($interface) : self
    {
        $this->interface = $interface;
        return $this;
    }
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @return mixed
     */
    public function getImplementation()
    {
        return $this->implementation;
    }
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @param mixed $implementation
     *
     * @return self
     */
    public function setImplementation($implementation) : self
    {
        $this->implementation = $implementation;
        return $this;
    }
}