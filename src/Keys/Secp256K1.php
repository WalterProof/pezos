<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Keys;

use function Bzzhh\Pezos\b58cdecode;

use Bzzhh\Pezos\Prefix;
use Elliptic\EC;

class Secp256K1 implements Curve
{
    public function addressPrefix(): array
    {
        return Prefix::BYTES[Prefix::TZ2];
    }

    public function publicKeyPrefix(): array
    {
        return Prefix::BYTES[Prefix::SPPK];
    }

    public function privateKeyPrefix(): array
    {
        return Prefix::BYTES[Prefix::SPSK];
    }

    public function signaturePrefix(): array
    {
        return Prefix::BYTES[Prefix::SPSIG];
    }

    public function getPublicKey(string $privateKey): string
    {
        return 'Not implemented';
    }

    public function sign(string $message, string $privKey): Signature
    {
        $hash      = sodium_crypto_generichash(hex2bin($message));
        $ec        = new EC('secp256k1');
        $key       = $ec->keyFromPrivate($privKey, 'hex');
        $signature = $key->sign(bin2hex($hash));

        \assert($signature instanceof Ec\Signature);

        $hex = bin2hex(
            pack('C*', ...$signature->r->toArray()).
                pack('C*', ...$signature->s->toArray()),
        );

        return new Signature($hex, $this->signaturePrefix());
    }

    public function verifySignature(
        string $signature,
        string $message,
        string $pubKey
    ): bool {
        $hash      = bin2hex(sodium_crypto_generichash(hex2bin($message)));
        $signature = b58cdecode($signature, $this->signaturePrefix());
        $sign      = [
            'r' => substr($signature, 0, 64),
            's' => substr($signature, 64, 64),
        ];

        $ec  = new EC('secp256k1');
        $key = $ec->keyFromPublic($pubKey, 'hex');

        return $ec->verify($hash, $sign, $key);
    }
}
