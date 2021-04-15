<?php

namespace Pezos\Generated\Shell\Model;

class UserActivatedUpgradesItem
{
    /**
     * 
     *
     * @var int
     */
    protected $level;
    /**
     * 
     *
     * @var mixed
     */
    protected $replacementProtocol;
    /**
     * 
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }
    /**
     * 
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getReplacementProtocol()
    {
        return $this->replacementProtocol;
    }
    /**
     * 
     *
     * @param mixed $replacementProtocol
     *
     * @return self
     */
    public function setReplacementProtocol($replacementProtocol) : self
    {
        $this->replacementProtocol = $replacementProtocol;
        return $this;
    }
}