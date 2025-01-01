<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Mempool\Model;

class PendingOperationsGetResponse200 extends \ArrayObject
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
     * @var list<PendingOperationsGetResponse200ValidatedItem>
     */
    protected $validated;
    /**
     * @var list<PendingOperationsGetResponse200RefusedItem>
     */
    protected $refused;
    /**
     * @var list<PendingOperationsGetResponse200OutdatedItem>
     */
    protected $outdated;
    /**
     * @var list<PendingOperationsGetResponse200BranchRefusedItem>
     */
    protected $branchRefused;
    /**
     * @var list<PendingOperationsGetResponse200BranchDelayedItem>
     */
    protected $branchDelayed;
    /**
     * @var list<PendingOperationsGetResponse200UnprocessedItem>
     */
    protected $unprocessed;

    /**
     * @return list<PendingOperationsGetResponse200ValidatedItem>
     */
    public function getValidated(): array
    {
        return $this->validated;
    }

    /**
     * @param list<PendingOperationsGetResponse200ValidatedItem> $validated
     */
    public function setValidated(array $validated): self
    {
        $this->initialized['validated'] = true;
        $this->validated = $validated;

        return $this;
    }

    /**
     * @return list<PendingOperationsGetResponse200RefusedItem>
     */
    public function getRefused(): array
    {
        return $this->refused;
    }

    /**
     * @param list<PendingOperationsGetResponse200RefusedItem> $refused
     */
    public function setRefused(array $refused): self
    {
        $this->initialized['refused'] = true;
        $this->refused = $refused;

        return $this;
    }

    /**
     * @return list<PendingOperationsGetResponse200OutdatedItem>
     */
    public function getOutdated(): array
    {
        return $this->outdated;
    }

    /**
     * @param list<PendingOperationsGetResponse200OutdatedItem> $outdated
     */
    public function setOutdated(array $outdated): self
    {
        $this->initialized['outdated'] = true;
        $this->outdated = $outdated;

        return $this;
    }

    /**
     * @return list<PendingOperationsGetResponse200BranchRefusedItem>
     */
    public function getBranchRefused(): array
    {
        return $this->branchRefused;
    }

    /**
     * @param list<PendingOperationsGetResponse200BranchRefusedItem> $branchRefused
     */
    public function setBranchRefused(array $branchRefused): self
    {
        $this->initialized['branchRefused'] = true;
        $this->branchRefused = $branchRefused;

        return $this;
    }

    /**
     * @return list<PendingOperationsGetResponse200BranchDelayedItem>
     */
    public function getBranchDelayed(): array
    {
        return $this->branchDelayed;
    }

    /**
     * @param list<PendingOperationsGetResponse200BranchDelayedItem> $branchDelayed
     */
    public function setBranchDelayed(array $branchDelayed): self
    {
        $this->initialized['branchDelayed'] = true;
        $this->branchDelayed = $branchDelayed;

        return $this;
    }

    /**
     * @return list<PendingOperationsGetResponse200UnprocessedItem>
     */
    public function getUnprocessed(): array
    {
        return $this->unprocessed;
    }

    /**
     * @param list<PendingOperationsGetResponse200UnprocessedItem> $unprocessed
     */
    public function setUnprocessed(array $unprocessed): self
    {
        $this->initialized['unprocessed'] = true;
        $this->unprocessed = $unprocessed;

        return $this;
    }
}