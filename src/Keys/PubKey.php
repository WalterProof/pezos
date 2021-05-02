<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use BitWasp\Buffertools\Buffer;
use BitWasp\Buffertools\BufferInterface;
use function Bzzhh\Pezos\b58cdecode;
use function Bzzhh\Pezos\b58cencode;
use function Bzzhh\Pezos\blake2b;

class PubKey
{
    private Curve $curve;
    private BufferInterface $pubKey;
    private string $address;

    public function __construct(BufferInterface $pubKey, Curve $curve)
    {
        $this->curve   = $curve;
        $this->pubKey  = $pubKey;
        $this->address = b58cencode(
            new Buffer(blake2b($this->pubKey->getBinary(), 20)),
            $this->curve->addressPrefix(),
        );
    }

    public function getBytes(): BufferInterface
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

    public static function fromBase58(string $pubKey, Curve $curve): PubKey
    {
        return new self(b58cdecode($pubKey, $curve->publicKeyPrefix()), $curve);
    }

    public function verifySignedHex(string $signature, string $msg): bool
    {
        $signature = b58cdecode($signature, $this->curve->signaturePrefix());
        $msg       = Buffer::hex($msg);
        $hash      = blake2b($msg->getBinary());

        return sodium_crypto_sign_verify_detached(
            $signature->getBinary(),
            $hash,
            $this->pubKey->getBinary(),
        );
    }
}
