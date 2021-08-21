<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

interface Curve
{
    public function addressPrefix(): array;

    public function publicKeyPrefix(): array;

    public function privateKeyPrefix(): array;

    public function signaturePrefix(): array;

    public function getPublicKey(string $privateKey): string;

    public function signHex(string $msg): Signature;

    public function verifySignedHex(
        string $signature,
        string $msg,
        string $publicKey
    ): bool;
}
