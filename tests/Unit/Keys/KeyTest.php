<?php

declare(strict_types=1);

namespace Bzzhh\Tests\Unit\Keys;

use Bzzhh\Pezos\Keys\Ed25519;
use Bzzhh\Pezos\Keys\Key;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Signature;
use PHPUnit\Framework\TestCase;

class KeyTest extends TestCase
{
    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519::signatures()
     */
    public function testEd25519(Signature $signature): void
    {
        $key = Key::fromBase58($signature->account->privateKey, new Ed25519());

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->signature,
            $key->signHex($signature->hex)->toBase58(),
        );
    }
}
