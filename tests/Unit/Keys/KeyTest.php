<?php

declare(strict_types=1);

namespace Tests\Unit\Keys;

use Pezos\Keys\Key;
use Pezos\Tests\Unit\DataProvider\Ed25519;
use Pezos\Tests\Unit\DataProvider\Models\Account;
use Pezos\Tests\Unit\DataProvider\Models\Signature;
use Pezos\Tests\Unit\DataProvider\Secp256K1;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class KeyTest extends TestCase
{
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

    #[DataProvider('signaturesProviderEd25519')]
    public function testEd25519Sign(Signature $signature): void
    {
        $key = Key::fromBase58($signature->account->privateKey);

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->signature,
            $key->sign($signature->message)->toBase58(),
        );
    }

    #[DataProvider('signaturesProviderSecp256K1')]
    public function testSecp256K1Sign(Signature $signature): void
    {
        $key = Key::fromBase58($signature->account->privateKey);

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->signature,
            $key->sign($signature->message)->toBase58(),
        );
    }
}
