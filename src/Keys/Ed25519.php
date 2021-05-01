<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use BitWasp\Buffertools\Buffer;
use BitWasp\Buffertools\BufferInterface;
use function Bzzhh\Pezos\b58cdecode;
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

    public function getPublicKey(string $privateKey): BufferInterface
    {
        return b58cdecode($privateKey, $this->privateKeyPrefix())->slice(
            SODIUM_CRYPTO_BOX_PUBLICKEYBYTES,
        );
    }

    public function sign(string $msg, BufferInterface $privateKey): Signature
    {
        return new Signature(new Buffer($msg), $this->signaturePrefix());
    }

    public function verifySignedHex(
        string $signature,
        string $msg,
        string $publicKey
    ): bool {
        $signature = b58cdecode($signature, $this->signaturePrefix());
        $publicKey = b58cdecode($publicKey, $this->publicKeyPrefix());
        $msg       = Buffer::hex($msg);
        $hash      = blake2b($msg->getBinary());

        return sodium_crypto_sign_verify_detached(
            $signature->getBinary(),
            $hash,
            $publicKey->getBinary(),
        );
    }
}
