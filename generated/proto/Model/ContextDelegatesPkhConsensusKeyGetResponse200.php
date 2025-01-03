<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class ContextDelegatesPkhConsensusKeyGetResponse200 extends \ArrayObject
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
     * @var ContextDelegatesPkhConsensusKeyGetResponse200Active
     */
    protected $active;
    /**
     * @var list<ContextDelegatesPkhConsensusKeyGetResponse200PendingsItem>
     */
    protected $pendings;

    public function getActive(): ContextDelegatesPkhConsensusKeyGetResponse200Active
    {
        return $this->active;
    }

    public function setActive(ContextDelegatesPkhConsensusKeyGetResponse200Active $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * @return list<ContextDelegatesPkhConsensusKeyGetResponse200PendingsItem>
     */
    public function getPendings(): array
    {
        return $this->pendings;
    }

    /**
     * @param list<ContextDelegatesPkhConsensusKeyGetResponse200PendingsItem> $pendings
     */
    public function setPendings(array $pendings): self
    {
        $this->initialized['pendings'] = true;
        $this->pendings = $pendings;

        return $this;
    }
}
