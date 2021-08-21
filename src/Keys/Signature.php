<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use function Bzzhh\Pezos\b58cencode;

class Signature
{
    private string $message;
    private array $prefix;

    public function __construct(string $message, array $prefix)
    {
        $this->message = $message;
        $this->prefix  = $prefix;
    }

    public function toBase58(): string
    {
        return b58cencode($this->message, $this->prefix);
    }
}
