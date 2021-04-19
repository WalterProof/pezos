<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsEntrypointPostBody
{
    /**
     * 
     *
     * @var mixed
     */
    protected $script;
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @var mixed
     */
    protected $entrypoint;
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
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @return mixed
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @param mixed $entrypoint
     *
     * @return self
     */
    public function setEntrypoint($entrypoint) : self
    {
        $this->entrypoint = $entrypoint;
        return $this;
    }
}