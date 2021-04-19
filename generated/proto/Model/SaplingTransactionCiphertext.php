<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class SaplingTransactionCiphertext
{
    /**
     * 
     *
     * @var string
     */
    protected $cv;
    /**
     * 
     *
     * @var string
     */
    protected $epk;
    /**
     * 
     *
     * @var string
     */
    protected $payloadEnc;
    /**
     * 
     *
     * @var string
     */
    protected $nonceEnc;
    /**
     * 
     *
     * @var string
     */
    protected $payloadOut;
    /**
     * 
     *
     * @var string
     */
    protected $nonceOut;
    /**
     * 
     *
     * @return string
     */
    public function getCv() : string
    {
        return $this->cv;
    }
    /**
     * 
     *
     * @param string $cv
     *
     * @return self
     */
    public function setCv(string $cv) : self
    {
        $this->cv = $cv;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEpk() : string
    {
        return $this->epk;
    }
    /**
     * 
     *
     * @param string $epk
     *
     * @return self
     */
    public function setEpk(string $epk) : self
    {
        $this->epk = $epk;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPayloadEnc() : string
    {
        return $this->payloadEnc;
    }
    /**
     * 
     *
     * @param string $payloadEnc
     *
     * @return self
     */
    public function setPayloadEnc(string $payloadEnc) : self
    {
        $this->payloadEnc = $payloadEnc;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNonceEnc() : string
    {
        return $this->nonceEnc;
    }
    /**
     * 
     *
     * @param string $nonceEnc
     *
     * @return self
     */
    public function setNonceEnc(string $nonceEnc) : self
    {
        $this->nonceEnc = $nonceEnc;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPayloadOut() : string
    {
        return $this->payloadOut;
    }
    /**
     * 
     *
     * @param string $payloadOut
     *
     * @return self
     */
    public function setPayloadOut(string $payloadOut) : self
    {
        $this->payloadOut = $payloadOut;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNonceOut() : string
    {
        return $this->nonceOut;
    }
    /**
     * 
     *
     * @param string $nonceOut
     *
     * @return self
     */
    public function setNonceOut(string $nonceOut) : self
    {
        $this->nonceOut = $nonceOut;
        return $this;
    }
}