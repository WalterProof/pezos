<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use BitWasp\Buffertools\BufferInterface;
use function Bzzhh\Pezos\b58cencode;

class Signature
{
    private BufferInterface $bytes;
    private array $prefix;

    public function __construct(BufferInterface $bytes, array $prefix)
    {
        $this->bytes  = $bytes;
        $this->prefix = $prefix;
    }

    public function toBase58(): string
    {
        return b58cencode($this->bytes->getHex(), $this->prefix);
    }
}
