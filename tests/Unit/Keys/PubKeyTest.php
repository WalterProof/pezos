<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\Keys;

use Bzzhh\Pezos\Keys\Ed25519;
use Bzzhh\Pezos\Keys\PubKey;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Account;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Signature;
use PHPUnit\Framework\TestCase;

class PubKeyTest extends TestCase
{
    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519::accounts()
     */
    public function testEd25519(Account $account): void
    {
        $pubKey = PubKey::fromBase58($account->publicKey, new Ed25519());

        $this->assertSame($account->publicKey, $pubKey->getPublicKey());
        $this->assertSame($account->publicKeyHash, $pubKey->getAddress());
    }

    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519::signatures()
     */
    public function testVerifySignature(Signature $signature): void
    {
        $key = PubKey::fromBase58(
            $signature->account->publicKey,
            new Ed25519(),
        );

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->valid,
            $key->verifySignedHex($signature->signature, $signature->hex),
        );
    }
}
