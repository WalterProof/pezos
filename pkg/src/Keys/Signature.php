<?php

declare(strict_types=1);

namespace Pezos\Keys;

use BitWasp\Buffertools\BufferInterface;
use function Pezos\b58cencode;

class Signature
{
    private BufferInterface $bytes;
    private array $prefix;

    public function __construct(BufferInterface $bytes, array $prefix)
    {
        $this->bytes  = $bytes;
        $this->prefix = $prefix;
    }

    public function toBase58()
    {
        return b58cencode($this->bytes, $this->prefix);
    }
}
