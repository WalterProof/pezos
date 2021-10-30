<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\Pezos\Keys;

use Bzzhh\Pezos\Keys\Secp256K1;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Account;
use PHPUnit\Framework\TestCase;

class Secp256K1Test extends TestCase
{
    private Secp256K1 $curve;

    public function setUp(): void
    {
        $this->curve = new Secp256K1();
    }

    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Secp256K1::accounts()
     */
    public function testPublicKeyFromSecretKey(Account $account): void
    {
        // TODO
        // self::assertSame(
        //   $account->publicKey,
        //   $this->curve->getPublicKey($account->privateKey),
        // );
    }
}
