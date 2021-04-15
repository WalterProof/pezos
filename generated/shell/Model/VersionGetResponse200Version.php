<?php

namespace Pezos\Generated\Shell\Model;

class VersionGetResponse200Version
{
    /**
     * 
     *
     * @var int
     */
    protected $major;
    /**
     * 
     *
     * @var int
     */
    protected $minor;
    /**
     * 
     *
     * @var mixed
     */
    protected $additionalInfo;
    /**
     * 
     *
     * @return int
     */
    public function getMajor() : int
    {
        return $this->major;
    }
    /**
     * 
     *
     * @param int $major
     *
     * @return self
     */
    public function setMajor(int $major) : self
    {
        $this->major = $major;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinor() : int
    {
        return $this->minor;
    }
    /**
     * 
     *
     * @param int $minor
     *
     * @return self
     */
    public function setMinor(int $minor) : self
    {
        $this->minor = $minor;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }
    /**
     * 
     *
     * @param mixed $additionalInfo
     *
     * @return self
     */
    public function setAdditionalInfo($additionalInfo) : self
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
}