<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsNormalizeScriptPostBody
{
    /**
     * 
     *
     * @var mixed
     */
    protected $script;
    /**
     * 
     *
     * @var mixed
     */
    protected $unparsingMode;
    /**
     * 
     *
     * @return mixed
     */
    public function getScript()
    {
        return $this->script;
    }
    /**
     * 
     *
     * @param mixed $script
     *
     * @return self
     */
    public function setScript($script) : self
    {
        $this->script = $script;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getUnparsingMode()
    {
        return $this->unparsingMode;
    }
    /**
     * 
     *
     * @param mixed $unparsingMode
     *
     * @return self
     */
    public function setUnparsingMode($unparsingMode) : self
    {
        $this->unparsingMode = $unparsingMode;
        return $this;
    }
}