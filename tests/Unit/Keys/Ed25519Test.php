<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\Pezos\Keys;

use Bzzhh\Pezos\Keys\Ed25519;
use Bzzhh\Pezos\Keys\Key;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Account;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Signature;
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

    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519::signatures()
     */
    public function testSignature(Signature $signature): void
    {
        $key = Key::fromBase58($signature->account->privateKey, $this->curve);

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->signature,
            $key->signHex($signature->hex)->toBase58(),
        );
    }

    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519::signatures()
     */
    public function testVerifySignedHex(Signature $signature)
    {
        $this->assertSame(
            $signature->valid,
            $this->curve->verifySignedHex(
                $signature->signature,
                $signature->hex,
                $signature->account->publicKey,
            ),
        );
    }
}
