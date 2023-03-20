<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\Pezos\Keys;

use Bzzhh\Pezos\Keys\Secp256K1;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Account;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Secp256K1 as DataProviderSecp256K1;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Secp256K1Test extends TestCase
{
    private Secp256K1 $curve;

    public function setUp(): void
    {
        $this->curve = new Secp256K1();
    }

    public static function accounts(): \Generator
    {
        yield 'alice' => [new Account(...DataProviderSecp256K1::ALICE)];
        yield 'bob' => [new Account(...DataProviderSecp256K1::BOB)];
    }

    #[DataProvider('accounts')]
    public function testPublicKeyFromSecretKey(Account $account): void
    {
        $this->markTestSkipped('Not implemented yet');
        // TODO
        // self::assertSame(
        //   $account->publicKey,
        //   $this->curve->getPublicKey($account->privateKey),
        // );
    }
}
