<?php

declare(strict_types=1);

namespace Test\Unit\Keys;

use Pezos\Keys\Ed25519;
use Pezos\Keys\PubKey;
use PHPUnit\Framework\TestCase;
use Test\Unit\DataProvider\Account;

class PubKeyTest extends TestCase
{
    /**
     * @dataProvider \Test\Unit\DataProvider\Ed25519::accounts()
     */
    public function testEd25519(Account $account)
    {
        $pubKey = new PubKey($account->privateKey, new Ed25519());

        $this->assertSame($account->publicKey, $pubKey->getPublicKey());
        $this->assertSame($account->publicKeyHash, $pubKey->getAddress());
    }
}
