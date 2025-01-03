<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Model;

class HelpersParseOperationsPostBody extends \ArrayObject
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
     * @var list<mixed>
     */
    protected $operations;
    /**
     * @var bool
     */
    protected $checkSignature;

    /**
     * @return list<mixed>
     */
    public function getOperations(): array
    {
        return $this->operations;
    }

    /**
     * @param list<mixed> $operations
     */
    public function setOperations(array $operations): self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;

        return $this;
    }

    public function getCheckSignature(): bool
    {
        return $this->checkSignature;
    }

    public function setCheckSignature(bool $checkSignature): self
    {
        $this->initialized['checkSignature'] = true;
        $this->checkSignature = $checkSignature;

        return $this;
    }
}
