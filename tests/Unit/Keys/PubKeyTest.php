<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\Keys;

use Bzzhh\Pezos\Keys\Ed25519;
use Bzzhh\Pezos\Keys\PubKey;
use Bzzhh\Pezos\Keys\Secp256K1;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Account;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Signature;
use PHPUnit\Framework\TestCase;

class PubKeyTest extends TestCase
{
    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519::accounts()
     */
    public function testEd25519PubKey(Account $account): void
    {
        $pubKey = PubKey::fromBase58($account->publicKey, new Ed25519());

        $this->assertSame($account->publicKey, $pubKey->getPublicKey());
        $this->assertSame($account->publicKeyHash, $pubKey->getAddress());
    }

    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Secp256K1::accounts()
     */
    public function testSecp256K1PubKey(Account $account): void
    {
        $pubKey = PubKey::fromBase58($account->publicKey, new Secp256K1());

        $this->assertSame($account->publicKey, $pubKey->getPublicKey());
        $this->assertSame($account->publicKeyHash, $pubKey->getAddress());
    }

    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519::signatures()
     */
    public function testEd25519VerifySignature(Signature $signature): void
    {
        $key = PubKey::fromBase58(
            $signature->account->publicKey,
            new Ed25519(),
        );

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->valid,
            $key->verifySignature($signature->signature, $signature->message),
        );
    }

    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Secp256K1::signatures()
     */
    public function testSecp256K1VerifySignature(Signature $signature): void
    {
        $key = PubKey::fromBase58(
            $signature->account->publicKey,
            new Secp256K1(),
        );

        $test = $signature->valid ? 'assertSame' : 'assertNotSame';

        $this->$test(
            $signature->valid,
            $key->verifySignature($signature->signature, $signature->message),
        );
    }
}
