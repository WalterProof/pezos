<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersPrevalidatorsChainIdGetResponse200BacklogItem
{
    /**
     * 
     *
     * @var string
     */
    protected $level;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $events;
    /**
     * 
     *
     * @return string
     */
    public function getLevel() : string
    {
        return $this->level;
    }
    /**
     * 
     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(string $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * 
     *
     * @param mixed[] $events
     *
     * @return self
     */
    public function setEvents(array $events) : self
    {
        $this->events = $events;
        return $this;
    }
}