<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use function Bzzhh\Pezos\b58cencode;

class Signature
{
    private string $hex;
    private array $prefix;

    public function __construct(string $hex, array $prefix)
    {
        $this->hex    = $hex;
        $this->prefix = $prefix;
    }

    public function toBase58(): string
    {
        return b58cencode($this->hex, $this->prefix);
    }
}
