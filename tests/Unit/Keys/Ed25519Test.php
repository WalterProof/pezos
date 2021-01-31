<?php

declare(strict_types=1);

namespace Tests\Unit\Pezos\Keys;

use Pezos\Keys\Ed25519;
use PHPUnit\Framework\TestCase;
use Tests\Unit\DataProvider\Signature;

class Ed25519Test extends TestCase
{
    private Ed25519 $curve;

    public function setUp(): void
    {
        $this->curve = new Ed25519();
    }

    /**
     * @dataProvider \Tests\Unit\DataProvider\Ed25519::signatures()
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
