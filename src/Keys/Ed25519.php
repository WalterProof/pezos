<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use Bzzhh\Pezos\Prefix;

use function Bzzhh\Pezos\b58cdecode;
use function Bzzhh\Pezos\b58cencode;
use function Bzzhh\Pezos\blake2b;

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

    public function sign(string $message, string $privKey): Signature
    {
        $hex = sodium_crypto_sign_detached(
            sodium_crypto_generichash(hex2bin($message)),
            hex2bin($privKey),
        );

        return new Signature(bin2hex($hex), $this->signaturePrefix());
    }

    public function verifySignature(
        string $signature,
        string $message,
        string $pubKey,
    ): bool {
        $signature = b58cdecode($signature, $this->signaturePrefix());
        $message   = blake2b(hex2bin($message));

        return sodium_crypto_sign_verify_detached(
            hex2bin($signature),
            $message,
            hex2bin($pubKey),
        );
    }
}
