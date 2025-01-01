<?php

declare(strict_types=1);

namespace Pezos\Tests\Unit\Pezos\Keys;

use Pezos\Keys\Ed25519;
use Pezos\Tests\Unit\DataProvider\Ed25519 as DataProviderEd25519;
use Pezos\Tests\Unit\DataProvider\Models\Account;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Ed25519Test extends TestCase
{
    private Ed25519 $curve;

    public function setUp(): void
    {
        $this->curve = new Ed25519();
    }

    public static function accountsProvider(): \Generator
    {
        yield 'alice' => [new Account(...DataProviderEd25519::ALICE)];
        yield 'bob' => [new Account(...DataProviderEd25519::BOB)];
    }

    #[DataProvider('accountsProvider')]
    public function testPublicKeyFromSecretKey(Account $account): void
    {
        $this->assertSame(
            $account->publicKey,
            $this->curve->getPublicKey($account->privateKey),
        );
    }
}
