<?php

declare(strict_types=1);

namespace Tests\Unit\Keys;

use Pezos\Keys\Ed25519;
use Pezos\Keys\Key;
use PHPUnit\Framework\TestCase;
use Tests\Unit\DataProvider\Signature;

class KeyTest extends TestCase
{
    /**
     * @dataProvider \Tests\Unit\DataProvider\Ed25519::signatures()
     */
    public function testEd25519(Signature $signature)
    {
        $key = Key::fromBase58($signature->account->privateKey, new Ed25519());

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->signature,
            $key->signHex($signature->hex)->toBase58()
        );
    }
}
