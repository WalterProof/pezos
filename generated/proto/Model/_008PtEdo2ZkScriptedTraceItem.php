<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class _008PtEdo2ZkScriptedTraceItem
{
    /**
     * The location of a node in a Micheline expression tree in prefix order, with zero being the root and adding one for every basic node, sequence and primitive application.
     *
     * @var int
     */
    protected $location;
    /**
     * 
     *
     * @var mixed
     */
    protected $gas;
    /**
     * 
     *
     * @var _008PtEdo2ZkScriptedTraceItemStackItem[]
     */
    protected $stack;
    /**
     * The location of a node in a Micheline expression tree in prefix order, with zero being the root and adding one for every basic node, sequence and primitive application.
     *
     * @return int
     */
    public function getLocation() : int
    {
        return $this->location;
    }
    /**
     * The location of a node in a Micheline expression tree in prefix order, with zero being the root and adding one for every basic node, sequence and primitive application.
     *
     * @param int $location
     *
     * @return self
     */
    public function setLocation(int $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getGas()
    {
        return $this->gas;
    }
    /**
     * 
     *
     * @param mixed $gas
     *
     * @return self
     */
    public function setGas($gas) : self
    {
        $this->gas = $gas;
        return $this;
    }
    /**
     * 
     *
     * @return _008PtEdo2ZkScriptedTraceItemStackItem[]
     */
    public function getStack() : array
    {
        return $this->stack;
    }
    /**
     * 
     *
     * @param _008PtEdo2ZkScriptedTraceItemStackItem[] $stack
     *
     * @return self
     */
    public function setStack(array $stack) : self
    {
        $this->stack = $stack;
        return $this;
    }
}