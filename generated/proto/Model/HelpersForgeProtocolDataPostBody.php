<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersForgeProtocolDataPostBody
{
    /**
     * 
     *
     * @var int
     */
    protected $priority;
    /**
     * 
     *
     * @var mixed
     */
    protected $nonceHash;
    /**
     * 
     *
     * @var string
     */
    protected $proofOfWorkNonce;
    /**
     * 
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getNonceHash()
    {
        return $this->nonceHash;
    }
    /**
     * 
     *
     * @param mixed $nonceHash
     *
     * @return self
     */
    public function setNonceHash($nonceHash) : self
    {
        $this->nonceHash = $nonceHash;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProofOfWorkNonce() : string
    {
        return $this->proofOfWorkNonce;
    }
    /**
     * 
     *
     * @param string $proofOfWorkNonce
     *
     * @return self
     */
    public function setProofOfWorkNonce(string $proofOfWorkNonce) : self
    {
        $this->proofOfWorkNonce = $proofOfWorkNonce;
        return $this;
    }
}