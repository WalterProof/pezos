<?php

namespace Pezos\Generated\Proto\Model;

class HelpersLevelsInCurrentCycleGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $first;
    /**
     * 
     *
     * @var int
     */
    protected $last;
    /**
     * 
     *
     * @return int
     */
    public function getFirst() : int
    {
        return $this->first;
    }
    /**
     * 
     *
     * @param int $first
     *
     * @return self
     */
    public function setFirst(int $first) : self
    {
        $this->first = $first;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLast() : int
    {
        return $this->last;
    }
    /**
     * 
     *
     * @param int $last
     *
     * @return self
     */
    public function setLast(int $last) : self
    {
        $this->last = $last;
        return $this;
    }
}