<?php

declare(strict_types=1);

namespace Test\Unit\Keys;

use Pezos\Keys\Ed25519;
use Pezos\Keys\Key;
use PHPUnit\Framework\TestCase;
use Test\Unit\DataProvider\Signature;

class KeyTest extends TestCase
{
    /**
     * @dataProvider \Test\Unit\DataProvider\Ed25519::signatures()
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
