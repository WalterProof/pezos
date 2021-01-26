<?php

declare(strict_types=1);

use Pezos\Keys\Ed25519;
use PHPUnit\Framework\TestCase;
use Tests\DataProvider\Signature;

class Ed25519Test extends TestCase
{
    private Ed25519 $curve;

    public function setUp(): void
    {
        $this->curve = new Ed25519();
    }

    /**
     * @dataProvider \Tests\DataProvider\Ed25519::signatures()
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
