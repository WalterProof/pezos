<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use Bzzhh\Pezos\Prefix;

use function Bzzhh\Pezos\b58cdecode;

class Key
{
    private Curve $curve;
    private string $privKey;

    public function __construct(string $privKey, Curve $curve)
    {
        $this->privKey = $privKey;
        $this->curve   = $curve;
    }

    public function sign(string $hash): Signature
    {
        return $this->curve->sign($hash, $this->privKey);
    }

    public static function fromBase58(string $privKey): self
    {
        if (0 === strpos($privKey, Prefix::EDSK)) {
            $curve = new Ed25519();
        } elseif (0 === strpos($privKey, Prefix::SPSK)) {
            $curve = new Secp256K1();
        }

        return new self(
            b58cdecode($privKey, $curve->privateKeyPrefix()),
            $curve,
        );
    }
}
