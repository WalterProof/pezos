<?php

declare(strict_types=1);

namespace Pezos\Keys;

use BitWasp\Buffertools\Buffer;
use BitWasp\Buffertools\BufferInterface;
use function Pezos\b58cencode;
use function Pezos\blake2b;

class PubKey
{
    private Curve $curve;
    private BufferInterface $pubKey;
    private string $address;

    public function __construct(string $privateKey, Curve $curve)
    {
        $this->curve   = $curve;
        $this->pubKey  = $this->curve->getPublicKey($privateKey);
        $this->address = b58cencode(
            new Buffer(blake2b($this->pubKey->getBinary(), 20)),
            $this->curve->addressPrefix()
        );
    }

    public function getBytes(): Buffer
    {
        return $this->pubKey;
    }

    public function getPublicKey(): string
    {
        return b58cencode($this->pubKey, $this->curve->publicKeyPrefix());
    }

    public function getAddress(): string
    {
        return $this->address;
    }
}
