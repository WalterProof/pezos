<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

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

    public static function fromBase58(string $privKey, Curve $curve): self
    {
        return new self(
            b58cdecode($privKey, $curve->privateKeyPrefix()),
            $curve,
        );
    }
}
