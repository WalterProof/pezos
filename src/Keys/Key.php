<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use BitWasp\Buffertools\Buffer;
use BitWasp\Buffertools\BufferInterface;
use function Bzzhh\Pezos\b58cdecode;

class Key
{
    private Curve $curve;
    private BufferInterface $privKey;

    public function __construct(BufferInterface $privKey, Curve $curve)
    {
        $this->privKey = $privKey;
        $this->curve   = $curve;
    }

    public function signHex(string $msg): Signature
    {
        $signature = sodium_crypto_sign_detached(
            (new Buffer(
                sodium_crypto_generichash(Buffer::hex($msg)->getBinary()),
            ))->getBinary(),
            $this->privKey->getBinary(),
        );

        return $this->curve->sign($signature, $this->privKey);
    }

    public static function fromBase58(string $privKey, Curve $curve): self
    {
        return new self(
            b58cdecode($privKey, $curve->privateKeyPrefix()),
            $curve,
        );
    }
}
