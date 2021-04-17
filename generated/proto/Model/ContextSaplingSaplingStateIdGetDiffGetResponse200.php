<?php

namespace Pezos\Generated\Proto\Model;

class ContextSaplingSaplingStateIdGetDiffGetResponse200
{
    /**
     * 
     *
     * @var string
     */
    protected $root;
    /**
     * 
     *
     * @var mixed[][]
     */
    protected $commitmentsAndCiphertexts;
    /**
     * 
     *
     * @var string[]
     */
    protected $nullifiers;
    /**
     * 
     *
     * @return string
     */
    public function getRoot() : string
    {
        return $this->root;
    }
    /**
     * 
     *
     * @param string $root
     *
     * @return self
     */
    public function setRoot(string $root) : self
    {
        $this->root = $root;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[][]
     */
    public function getCommitmentsAndCiphertexts() : array
    {
        return $this->commitmentsAndCiphertexts;
    }
    /**
     * 
     *
     * @param mixed[][] $commitmentsAndCiphertexts
     *
     * @return self
     */
    public function setCommitmentsAndCiphertexts(array $commitmentsAndCiphertexts) : self
    {
        $this->commitmentsAndCiphertexts = $commitmentsAndCiphertexts;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getNullifiers() : array
    {
        return $this->nullifiers;
    }
    /**
     * 
     *
     * @param string[] $nullifiers
     *
     * @return self
     */
    public function setNullifiers(array $nullifiers) : self
    {
        $this->nullifiers = $nullifiers;
        return $this;
    }
}