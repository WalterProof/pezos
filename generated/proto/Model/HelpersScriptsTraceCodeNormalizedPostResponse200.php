<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsTraceCodeNormalizedPostResponse200
{
    /**
     * 
     *
     * @var mixed
     */
    protected $storage;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $operations;
    /**
     * 
     *
     * @var _009PsFLorenScriptedTraceItem[]
     */
    protected $trace;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $bigMapDiff;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $lazyStorageDiff;
    /**
     * 
     *
     * @return mixed
     */
    public function getStorage()
    {
        return $this->storage;
    }
    /**
     * 
     *
     * @param mixed $storage
     *
     * @return self
     */
    public function setStorage($storage) : self
    {
        $this->storage = $storage;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param mixed[] $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
    /**
     * 
     *
     * @return _009PsFLorenScriptedTraceItem[]
     */
    public function getTrace() : array
    {
        return $this->trace;
    }
    /**
     * 
     *
     * @param _009PsFLorenScriptedTraceItem[] $trace
     *
     * @return self
     */
    public function setTrace(array $trace) : self
    {
        $this->trace = $trace;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getBigMapDiff() : array
    {
        return $this->bigMapDiff;
    }
    /**
     * 
     *
     * @param mixed[] $bigMapDiff
     *
     * @return self
     */
    public function setBigMapDiff(array $bigMapDiff) : self
    {
        $this->bigMapDiff = $bigMapDiff;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getLazyStorageDiff() : array
    {
        return $this->lazyStorageDiff;
    }
    /**
     * 
     *
     * @param mixed[] $lazyStorageDiff
     *
     * @return self
     */
    public function setLazyStorageDiff(array $lazyStorageDiff) : self
    {
        $this->lazyStorageDiff = $lazyStorageDiff;
        return $this;
    }
}