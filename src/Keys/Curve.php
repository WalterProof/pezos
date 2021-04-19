<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use BitWasp\Buffertools\BufferInterface;

interface Curve
{
    public function addressPrefix(): array;

    public function publicKeyPrefix(): array;

    public function privateKeyPrefix(): array;

    public function signaturePrefix(): array;

    public function getPublicKey(string $privateKey): BufferInterface;

    public function sign(string $msg, BufferInterface $privateKey): Signature;
}
