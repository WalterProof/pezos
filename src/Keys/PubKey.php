<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use function Bzzhh\Pezos\b58cdecode;
use function Bzzhh\Pezos\b58cencode;
use function Bzzhh\Pezos\blake2b;

class PubKey
{
    private Curve $curve;
    private string $pubKey;
    private string $address;

    public function __construct(string $pubKey, Curve $curve)
    {
        $this->curve   = $curve;
        $this->pubKey  = $pubKey;
        $this->address = b58cencode(
            bin2hex(blake2b(hex2bin($this->pubKey), 20)),
            $this->curve->addressPrefix(),
        );
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
        $hash      = blake2b(hex2bin($msg));

        return sodium_crypto_sign_verify_detached(
            hex2bin($signature),
            $hash,
            hex2bin($this->pubKey),
        );
    }
}
