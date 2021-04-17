<?php

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsTypecheckCodePostResponse200TypeMapItem
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
     * @var mixed[][]
     */
    protected $stackBefore;
    /**
     * 
     *
     * @var mixed[][]
     */
    protected $stackAfter;
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
     * @return mixed[][]
     */
    public function getStackBefore() : array
    {
        return $this->stackBefore;
    }
    /**
     * 
     *
     * @param mixed[][] $stackBefore
     *
     * @return self
     */
    public function setStackBefore(array $stackBefore) : self
    {
        $this->stackBefore = $stackBefore;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[][]
     */
    public function getStackAfter() : array
    {
        return $this->stackAfter;
    }
    /**
     * 
     *
     * @param mixed[][] $stackAfter
     *
     * @return self
     */
    public function setStackAfter(array $stackAfter) : self
    {
        $this->stackAfter = $stackAfter;
        return $this;
    }
}