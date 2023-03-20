<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\Keys;

use Bzzhh\Pezos\Keys\PubKey;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Account;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Signature;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Secp256K1;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class PubKeyTest extends TestCase
{
    public static function accountsProviderEd25519(): \Generator
    {
        yield 'alice' => [new Account(...Ed25519::ALICE)];
        yield 'bob' => [new Account(...Ed25519::BOB)];
    }

    public static function accountsProviderSecp256K1(): \Generator
    {
        yield 'alice' => [new Account(...Secp256K1::ALICE)];
        yield 'bob' => [new Account(...Secp256K1::BOB)];
    }

    public static function signaturesProviderEd25519(): \Generator
    {
        yield 'alice signature' => [
            new Signature(
                new Account(...Ed25519::ALICE),
                // tezos-client hash data '"Hello"' of type string
                '05010000000548656c6c6f',
                // tezos-client sign bytes '0x05010000000548656c6c6f' for alice
                'edsigtxHb4HCsgf3zLLcTx4Rj23Y3CSJf8jaRXwoVHZJgSsMhzFoxKtinx2TT5FgYKprLVQ9nq8o93MCpmxaTuRB7igT9b6nZyf',
            ),
        ];
    }

    public static function signaturesProviderSecp256K1(): \Generator
    {
        yield 'alice signature' => [
            new Signature(
                new Account(...Secp256K1::ALICE),
                // tezos-client hash data '"Hello"' of type string
                '05010000000548656c6c6f',
                // tezos-client sign bytes '0x05010000000548656c6c6f' for alice
                'spsig1f6UAm9sYiqBqvYpNzvD4WpPgesWjDfz35BKGuJsBZydtRVXXi9trhnq4vYCaKsb4ELsqZuSoJqdnKpWmjFiJ1gMgPEbhN',
            ),
        ];
    }

    #[DataProvider('accountsProviderEd25519')]
    public function testEd25519PubKey(Account $account): void
    {
        $pubKey = PubKey::fromBase58($account->publicKey);

        $this->assertSame($account->publicKey, $pubKey->getPublicKey());
        $this->assertSame($account->publicKeyHash, $pubKey->getAddress());
    }

    #[DataProvider('accountsProviderSecp256K1')]
    public function testSecp256K1PubKey(Account $account): void
    {
        $pubKey = PubKey::fromBase58($account->publicKey);

        $this->assertSame($account->publicKey, $pubKey->getPublicKey());
        $this->assertSame($account->publicKeyHash, $pubKey->getAddress());
    }

    #[DataProvider('signaturesProviderEd25519')]
    public function testEd25519VerifySignature(Signature $signature): void
    {
        $key = PubKey::fromBase58($signature->account->publicKey);

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->valid,
            $key->verifySignature($signature->signature, $signature->message),
        );
    }

    #[DataProvider('signaturesProviderSecp256K1')]
    public function testSecp256K1VerifySignature(Signature $signature): void
    {
        $key = PubKey::fromBase58($signature->account->publicKey);

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->valid,
            $key->verifySignature($signature->signature, $signature->message),
        );
    }
}
