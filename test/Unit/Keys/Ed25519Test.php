<?php

declare(strict_types=1);

namespace Test\Unit\Pezos\Keys;

use Pezos\Keys\Ed25519;
use PHPUnit\Framework\TestCase;
use Test\Unit\DataProvider\Signature;

class Ed25519Test extends TestCase
{
    private Ed25519 $curve;

    public function setUp(): void
    {
        $this->curve = new Ed25519();
    }

    /**
     * @dataProvider \Test\Unit\DataProvider\Ed25519::signatures()
     */
    public function testVerifySignedHex(Signature $signature)
    {
        $this->assertSame(
            $signature->valid,
            $this->curve->verifySignedHex(
                $signature->signature,
                $signature->hex,
                $signature->account->publicKey
            )
        );
    }
}
