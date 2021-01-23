<?php

declare(strict_types=1);

namespace Tests\Keys;

use Pezos\Keys\Ed25519;
use Pezos\Keys\Key;
use PHPUnit\Framework\TestCase;
use Tests\DataProvider\Signature;

class KeyTest extends TestCase
{
    /**
     * @dataProvider \Tests\DataProvider\Ed25519::signatures()
     */
    public function testEd25519(Signature $signature)
    {
        $key = Key::fromBase58($signature->account->privateKey, new Ed25519());

        $this->assertSame(
            $signature->signature,
            $key->signBytes($signature->bytes)->toBase58()
        );
    }
}
