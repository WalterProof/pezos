<?php

namespace Pezos\Generated\Shell\Model;

class UserActivatedProtocolOverridesItem
{
    /**
     * 
     *
     * @var mixed
     */
    protected $replacedProtocol;
    /**
     * 
     *
     * @var mixed
     */
    protected $replacementProtocol;
    /**
     * 
     *
     * @return mixed
     */
    public function getReplacedProtocol()
    {
        return $this->replacedProtocol;
    }
    /**
     * 
     *
     * @param mixed $replacedProtocol
     *
     * @return self
     */
    public function setReplacedProtocol($replacedProtocol) : self
    {
        $this->replacedProtocol = $replacedProtocol;
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