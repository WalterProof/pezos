<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Model;

class LocalBatcherQueueGetResponse200ItemMessage extends \ArrayObject
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
     * Decimal representation of a big number.
     *
     * @var string
     */
    protected $counter;
    /**
     * A hex encoded smart rollup message.
     *
     * @var string
     */
    protected $content;

    /**
     * Decimal representation of a big number.
     */
    public function getCounter(): string
    {
        return $this->counter;
    }

    /**
     * Decimal representation of a big number.
     */
    public function setCounter(string $counter): self
    {
        $this->initialized['counter'] = true;
        $this->counter = $counter;

        return $this;
    }

    /**
     * A hex encoded smart rollup message.
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * A hex encoded smart rollup message.
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }
}