<?php

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsNormalizeDataPostBody
{
    /**
     * 
     *
     * @var mixed
     */
    protected $data;
    /**
     * 
     *
     * @var mixed
     */
    protected $type;
    /**
     * 
     *
     * @var mixed
     */
    protected $unparsingMode;
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
    public function getData()
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param mixed $data
     *
     * @return self
     */
    public function setData($data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->type = $type;
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