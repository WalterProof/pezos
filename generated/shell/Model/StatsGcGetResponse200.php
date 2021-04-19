<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class StatsGcGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $minorWords;
    /**
     * 
     *
     * @var int
     */
    protected $promotedWords;
    /**
     * 
     *
     * @var int
     */
    protected $majorWords;
    /**
     * 
     *
     * @var int
     */
    protected $minorCollections;
    /**
     * 
     *
     * @var int
     */
    protected $majorCollections;
    /**
     * 
     *
     * @var int
     */
    protected $heapWords;
    /**
     * 
     *
     * @var int
     */
    protected $heapChunks;
    /**
     * 
     *
     * @var int
     */
    protected $liveWords;
    /**
     * 
     *
     * @var int
     */
    protected $liveBlocks;
    /**
     * 
     *
     * @var int
     */
    protected $freeWords;
    /**
     * 
     *
     * @var int
     */
    protected $freeBlocks;
    /**
     * 
     *
     * @var int
     */
    protected $largestFree;
    /**
     * 
     *
     * @var int
     */
    protected $fragments;
    /**
     * 
     *
     * @var int
     */
    protected $compactions;
    /**
     * 
     *
     * @var int
     */
    protected $topHeapWords;
    /**
     * 
     *
     * @var int
     */
    protected $stackSize;
    /**
     * 
     *
     * @return int
     */
    public function getMinorWords() : int
    {
        return $this->minorWords;
    }
    /**
     * 
     *
     * @param int $minorWords
     *
     * @return self
     */
    public function setMinorWords(int $minorWords) : self
    {
        $this->minorWords = $minorWords;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPromotedWords() : int
    {
        return $this->promotedWords;
    }
    /**
     * 
     *
     * @param int $promotedWords
     *
     * @return self
     */
    public function setPromotedWords(int $promotedWords) : self
    {
        $this->promotedWords = $promotedWords;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMajorWords() : int
    {
        return $this->majorWords;
    }
    /**
     * 
     *
     * @param int $majorWords
     *
     * @return self
     */
    public function setMajorWords(int $majorWords) : self
    {
        $this->majorWords = $majorWords;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinorCollections() : int
    {
        return $this->minorCollections;
    }
    /**
     * 
     *
     * @param int $minorCollections
     *
     * @return self
     */
    public function setMinorCollections(int $minorCollections) : self
    {
        $this->minorCollections = $minorCollections;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMajorCollections() : int
    {
        return $this->majorCollections;
    }
    /**
     * 
     *
     * @param int $majorCollections
     *
     * @return self
     */
    public function setMajorCollections(int $majorCollections) : self
    {
        $this->majorCollections = $majorCollections;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeapWords() : int
    {
        return $this->heapWords;
    }
    /**
     * 
     *
     * @param int $heapWords
     *
     * @return self
     */
    public function setHeapWords(int $heapWords) : self
    {
        $this->heapWords = $heapWords;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeapChunks() : int
    {
        return $this->heapChunks;
    }
    /**
     * 
     *
     * @param int $heapChunks
     *
     * @return self
     */
    public function setHeapChunks(int $heapChunks) : self
    {
        $this->heapChunks = $heapChunks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLiveWords() : int
    {
        return $this->liveWords;
    }
    /**
     * 
     *
     * @param int $liveWords
     *
     * @return self
     */
    public function setLiveWords(int $liveWords) : self
    {
        $this->liveWords = $liveWords;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLiveBlocks() : int
    {
        return $this->liveBlocks;
    }
    /**
     * 
     *
     * @param int $liveBlocks
     *
     * @return self
     */
    public function setLiveBlocks(int $liveBlocks) : self
    {
        $this->liveBlocks = $liveBlocks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFreeWords() : int
    {
        return $this->freeWords;
    }
    /**
     * 
     *
     * @param int $freeWords
     *
     * @return self
     */
    public function setFreeWords(int $freeWords) : self
    {
        $this->freeWords = $freeWords;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFreeBlocks() : int
    {
        return $this->freeBlocks;
    }
    /**
     * 
     *
     * @param int $freeBlocks
     *
     * @return self
     */
    public function setFreeBlocks(int $freeBlocks) : self
    {
        $this->freeBlocks = $freeBlocks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLargestFree() : int
    {
        return $this->largestFree;
    }
    /**
     * 
     *
     * @param int $largestFree
     *
     * @return self
     */
    public function setLargestFree(int $largestFree) : self
    {
        $this->largestFree = $largestFree;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFragments() : int
    {
        return $this->fragments;
    }
    /**
     * 
     *
     * @param int $fragments
     *
     * @return self
     */
    public function setFragments(int $fragments) : self
    {
        $this->fragments = $fragments;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCompactions() : int
    {
        return $this->compactions;
    }
    /**
     * 
     *
     * @param int $compactions
     *
     * @return self
     */
    public function setCompactions(int $compactions) : self
    {
        $this->compactions = $compactions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTopHeapWords() : int
    {
        return $this->topHeapWords;
    }
    /**
     * 
     *
     * @param int $topHeapWords
     *
     * @return self
     */
    public function setTopHeapWords(int $topHeapWords) : self
    {
        $this->topHeapWords = $topHeapWords;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStackSize() : int
    {
        return $this->stackSize;
    }
    /**
     * 
     *
     * @param int $stackSize
     *
     * @return self
     */
    public function setStackSize(int $stackSize) : self
    {
        $this->stackSize = $stackSize;
        return $this;
    }
}