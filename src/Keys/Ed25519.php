<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use function Bzzhh\Pezos\b58cdecode;
use function Bzzhh\Pezos\b58cencode;
use function Bzzhh\Pezos\blake2b;
use Bzzhh\Pezos\Prefix;

class Ed25519 implements Curve
{
    public function addressPrefix(): array
    {
        return Prefix::BYTES[Prefix::TZ1];
    }

    public function publicKeyPrefix(): array
    {
        return Prefix::BYTES[Prefix::EDPK];
    }

    public function privateKeyPrefix(): array
    {
        return Prefix::BYTES[Prefix::EDSK];
    }

    public function signaturePrefix(): array
    {
        return Prefix::BYTES[Prefix::EDSIG];
    }

    public function getPublicKey(string $privateKey): string
    {
        return b58cencode(
            bin2hex(
                pack(
                    'C*',
                    ...\array_slice(
                        unpack(
                            'C*',
                            hex2bin(
                                b58cdecode(
                                    $privateKey,
                                    $this->privateKeyPrefix(),
                                ),
                            ),
                        ),
                        SODIUM_CRYPTO_BOX_PUBLICKEYBYTES,
                    ),
                ),
            ),
            $this->publicKeyPrefix(),
        );
    }

    public function signHex(string $msg): Signature
    {
        return new Signature($msg, $this->signaturePrefix());
    }

    public function verifySignedHex(
        string $signature,
        string $msg,
        string $publicKey
    ): bool {
        $signature = b58cdecode($signature, $this->signaturePrefix());
        $publicKey = b58cdecode($publicKey, $this->publicKeyPrefix());
        $hash      = blake2b(hex2bin($msg));

        return sodium_crypto_sign_verify_detached(
            hex2bin($signature),
            $hash,
            hex2bin($publicKey),
        );
    }
}
