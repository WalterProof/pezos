<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsTypecheckCodePostBody
{
    /**
     * 
     *
     * @var mixed
     */
    protected $program;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $gas;
    /**
     * 
     *
     * @var bool
     */
    protected $legacy;
    /**
     * 
     *
     * @return mixed
     */
    public function getProgram()
    {
        return $this->program;
    }
    /**
     * 
     *
     * @param mixed $program
     *
     * @return self
     */
    public function setProgram($program) : self
    {
        $this->program = $program;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getGas() : string
    {
        return $this->gas;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $gas
     *
     * @return self
     */
    public function setGas(string $gas) : self
    {
        $this->gas = $gas;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getLegacy() : bool
    {
        return $this->legacy;
    }
    /**
     * 
     *
     * @param bool $legacy
     *
     * @return self
     */
    public function setLegacy(bool $legacy) : self
    {
        $this->legacy = $legacy;
        return $this;
    }
}