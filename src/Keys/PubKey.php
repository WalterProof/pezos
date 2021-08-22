<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use function Bzzhh\Pezos\b58cdecode;
use function Bzzhh\Pezos\b58cencode;
use function Bzzhh\Pezos\blake2b;
use Bzzhh\Pezos\Prefix;

class PubKey
{
    private string $pubKey;
    private Curve $curve;

    private function __construct(string $pubKey, Curve $curve)
    {
        $this->pubKey = $pubKey;
        $this->curve  = $curve;
    }

    public function getPublicKey(): string
    {
        return b58cencode($this->pubKey, $this->curve->publicKeyPrefix());
    }

    public function getAddress(): string
    {
        return b58cencode(
            bin2hex(blake2b(hex2bin($this->pubKey), 20)),
            $this->curve->addressPrefix(),
        );
    }

    public static function fromHex(string $hex, Curve $curve): self
    {
        return new self($hex, $curve);
    }

    public static function fromBase58(string $pubKey): self
    {
        if (0 === strpos($pubKey, Prefix::EDPK)) {
            $curve = new Ed25519();
        } elseif (0 === strpos($pubKey, Prefix::SPPK)) {
            $curve = new Secp256K1();
        }

        return new self(b58cdecode($pubKey, $curve->publicKeyPrefix()), $curve);
    }

    public function verifySignature(string $signature, string $hash): bool
    {
        return $this->curve->verifySignature($signature, $hash, $this->pubKey);
    }
}
