<?php

declare(strict_types=1);

namespace Bzzhh\Tests\Unit\Keys;

use Bzzhh\Pezos\Keys\Ed25519;
use Bzzhh\Pezos\Keys\Key;
use Bzzhh\Pezos\Keys\Secp256K1;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Signature;
use PHPUnit\Framework\TestCase;

class KeyTest extends TestCase
{
    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519::signatures()
     */
    public function testEd25519Sign(Signature $signature): void
    {
        $key = Key::fromBase58($signature->account->privateKey, new Ed25519());

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->signature,
            $key->sign($signature->message)->toBase58(),
        );
    }

    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Secp256K1::signatures()
     */
    public function testSecp256K1Sign(Signature $signature): void
    {
        $key = Key::fromBase58(
            $signature->account->privateKey,
            new Secp256K1(),
        );

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->signature,
            $key->sign($signature->message)->toBase58(),
        );
    }
}
