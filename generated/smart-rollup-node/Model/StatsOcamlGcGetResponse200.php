<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Model;

class StatsOcamlGcGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var float
     */
    protected $minorWords;
    /**
     * @var float
     */
    protected $promotedWords;
    /**
     * @var float
     */
    protected $majorWords;
    /**
     * @var int
     */
    protected $minorCollections;
    /**
     * @var int
     */
    protected $majorCollections;
    /**
     * @var int
     */
    protected $forcedMajorCollections;
    /**
     * @var int
     */
    protected $heapWords;
    /**
     * @var int
     */
    protected $heapChunks;
    /**
     * @var int
     */
    protected $liveWords;
    /**
     * @var int
     */
    protected $liveBlocks;
    /**
     * @var int
     */
    protected $freeWords;
    /**
     * @var int
     */
    protected $freeBlocks;
    /**
     * @var int
     */
    protected $largestFree;
    /**
     * @var int
     */
    protected $fragments;
    /**
     * @var int
     */
    protected $compactions;
    /**
     * @var int
     */
    protected $topHeapWords;
    /**
     * @var int
     */
    protected $stackSize;

    public function getMinorWords(): float
    {
        return $this->minorWords;
    }

    public function setMinorWords(float $minorWords): self
    {
        $this->initialized['minorWords'] = true;
        $this->minorWords = $minorWords;

        return $this;
    }

    public function getPromotedWords(): float
    {
        return $this->promotedWords;
    }

    public function setPromotedWords(float $promotedWords): self
    {
        $this->initialized['promotedWords'] = true;
        $this->promotedWords = $promotedWords;

        return $this;
    }

    public function getMajorWords(): float
    {
        return $this->majorWords;
    }

    public function setMajorWords(float $majorWords): self
    {
        $this->initialized['majorWords'] = true;
        $this->majorWords = $majorWords;

        return $this;
    }

    public function getMinorCollections(): int
    {
        return $this->minorCollections;
    }

    public function setMinorCollections(int $minorCollections): self
    {
        $this->initialized['minorCollections'] = true;
        $this->minorCollections = $minorCollections;

        return $this;
    }

    public function getMajorCollections(): int
    {
        return $this->majorCollections;
    }

    public function setMajorCollections(int $majorCollections): self
    {
        $this->initialized['majorCollections'] = true;
        $this->majorCollections = $majorCollections;

        return $this;
    }

    public function getForcedMajorCollections(): int
    {
        return $this->forcedMajorCollections;
    }

    public function setForcedMajorCollections(int $forcedMajorCollections): self
    {
        $this->initialized['forcedMajorCollections'] = true;
        $this->forcedMajorCollections = $forcedMajorCollections;

        return $this;
    }

    public function getHeapWords(): int
    {
        return $this->heapWords;
    }

    public function setHeapWords(int $heapWords): self
    {
        $this->initialized['heapWords'] = true;
        $this->heapWords = $heapWords;

        return $this;
    }

    public function getHeapChunks(): int
    {
        return $this->heapChunks;
    }

    public function setHeapChunks(int $heapChunks): self
    {
        $this->initialized['heapChunks'] = true;
        $this->heapChunks = $heapChunks;

        return $this;
    }

    public function getLiveWords(): int
    {
        return $this->liveWords;
    }

    public function setLiveWords(int $liveWords): self
    {
        $this->initialized['liveWords'] = true;
        $this->liveWords = $liveWords;

        return $this;
    }

    public function getLiveBlocks(): int
    {
        return $this->liveBlocks;
    }

    public function setLiveBlocks(int $liveBlocks): self
    {
        $this->initialized['liveBlocks'] = true;
        $this->liveBlocks = $liveBlocks;

        return $this;
    }

    public function getFreeWords(): int
    {
        return $this->freeWords;
    }

    public function setFreeWords(int $freeWords): self
    {
        $this->initialized['freeWords'] = true;
        $this->freeWords = $freeWords;

        return $this;
    }

    public function getFreeBlocks(): int
    {
        return $this->freeBlocks;
    }

    public function setFreeBlocks(int $freeBlocks): self
    {
        $this->initialized['freeBlocks'] = true;
        $this->freeBlocks = $freeBlocks;

        return $this;
    }

    public function getLargestFree(): int
    {
        return $this->largestFree;
    }

    public function setLargestFree(int $largestFree): self
    {
        $this->initialized['largestFree'] = true;
        $this->largestFree = $largestFree;

        return $this;
    }

    public function getFragments(): int
    {
        return $this->fragments;
    }

    public function setFragments(int $fragments): self
    {
        $this->initialized['fragments'] = true;
        $this->fragments = $fragments;

        return $this;
    }

    public function getCompactions(): int
    {
        return $this->compactions;
    }

    public function setCompactions(int $compactions): self
    {
        $this->initialized['compactions'] = true;
        $this->compactions = $compactions;

        return $this;
    }

    public function getTopHeapWords(): int
    {
        return $this->topHeapWords;
    }

    public function setTopHeapWords(int $topHeapWords): self
    {
        $this->initialized['topHeapWords'] = true;
        $this->topHeapWords = $topHeapWords;

        return $this;
    }

    public function getStackSize(): int
    {
        return $this->stackSize;
    }

    public function setStackSize(int $stackSize): self
    {
        $this->initialized['stackSize'] = true;
        $this->stackSize = $stackSize;

        return $this;
    }
}