<?php

declare(strict_types=1);

namespace Pezos\Keys;

use BitWasp\Buffertools\Buffer;
use BitWasp\Buffertools\BufferInterface;
use function Pezos\b58cdecode;
use function Pezos\blake2b;

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

    public function getPublicKey(string $privateKey): BufferInterface
    {
        return b58cdecode($privateKey, $this->privateKeyPrefix())->slice(
            SODIUM_CRYPTO_BOX_PUBLICKEYBYTES
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
            $publicKey->getBinary()
        );
    }
}
