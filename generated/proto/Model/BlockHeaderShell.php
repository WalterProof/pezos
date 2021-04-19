<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class BlockHeaderShell
{
    /**
     * 
     *
     * @var int
     */
    protected $level;
    /**
     * 
     *
     * @var int
     */
    protected $proto;
    /**
     * 
     *
     * @var mixed
     */
    protected $predecessor;
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @var mixed
     */
    protected $timestamp;
    /**
     * 
     *
     * @var int
     */
    protected $validationPass;
    /**
     * 
     *
     * @var mixed
     */
    protected $operationsHash;
    /**
     * The fitness, or score, of a block, that allow the Tezos to decide which chain is the best. A fitness value is a list of byte sequences. They are compared as follows: shortest lists are smaller; lists of the same length are compared according to the lexicographical order.
     *
     * @var string[]
     */
    protected $fitness;
    /**
     * 
     *
     * @var mixed
     */
    protected $context;
    /**
     * 
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }
    /**
     * 
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProto() : int
    {
        return $this->proto;
    }
    /**
     * 
     *
     * @param int $proto
     *
     * @return self
     */
    public function setProto(int $proto) : self
    {
        $this->proto = $proto;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPredecessor()
    {
        return $this->predecessor;
    }
    /**
     * 
     *
     * @param mixed $predecessor
     *
     * @return self
     */
    public function setPredecessor($predecessor) : self
    {
        $this->predecessor = $predecessor;
        return $this;
    }
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @param mixed $timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidationPass() : int
    {
        return $this->validationPass;
    }
    /**
     * 
     *
     * @param int $validationPass
     *
     * @return self
     */
    public function setValidationPass(int $validationPass) : self
    {
        $this->validationPass = $validationPass;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getOperationsHash()
    {
        return $this->operationsHash;
    }
    /**
     * 
     *
     * @param mixed $operationsHash
     *
     * @return self
     */
    public function setOperationsHash($operationsHash) : self
    {
        $this->operationsHash = $operationsHash;
        return $this;
    }
    /**
     * The fitness, or score, of a block, that allow the Tezos to decide which chain is the best. A fitness value is a list of byte sequences. They are compared as follows: shortest lists are smaller; lists of the same length are compared according to the lexicographical order.
     *
     * @return string[]
     */
    public function getFitness() : array
    {
        return $this->fitness;
    }
    /**
     * The fitness, or score, of a block, that allow the Tezos to decide which chain is the best. A fitness value is a list of byte sequences. They are compared as follows: shortest lists are smaller; lists of the same length are compared according to the lexicographical order.
     *
     * @param string[] $fitness
     *
     * @return self
     */
    public function setFitness(array $fitness) : self
    {
        $this->fitness = $fitness;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * 
     *
     * @param mixed $context
     *
     * @return self
     */
    public function setContext($context) : self
    {
        $this->context = $context;
        return $this;
    }
}