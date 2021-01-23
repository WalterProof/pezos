<?php

declare(strict_types=1);

namespace Pezos\Keys;

use BitWasp\Buffertools\Buffer;
use function Pezos\b58cdecode;

class Ed25519 implements Curve
{
    public function addressPrefix(): array
    {
        return [6, 161, 159];
    }

    public function publicKeyPrefix(): array
    {
        return [13, 15, 37, 217];
    }

    public function privateKeyPrefix(): array
    {
        return [43, 246, 78, 7];
    }

    public function signaturePrefix(): array
    {
        return [9, 245, 205, 134, 18];
    }

    public function getPrivateKey()
    {
    }

    public function getPublicKey(string $privateKey): Buffer
    {
        return b58cdecode($privateKey, $this->privateKeyPrefix())->slice(
            SODIUM_CRYPTO_BOX_PUBLICKEYBYTES
        );
    }
}
