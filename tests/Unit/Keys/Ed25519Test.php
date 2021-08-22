<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\Pezos\Keys;

use Bzzhh\Pezos\Keys\Ed25519;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Account;
use PHPUnit\Framework\TestCase;

class Ed25519Test extends TestCase
{
    private Ed25519 $curve;

    public function setUp(): void
    {
        $this->curve = new Ed25519();
    }

    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519::accounts()
     */
    public function testPublicKeyFromSecretKey(Account $account): void
    {
        self::assertSame(
            $account->publicKey,
            $this->curve->getPublicKey($account->privateKey),
        );
    }
}
