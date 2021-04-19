<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\Keys;

use Bzzhh\Pezos\Keys\Ed25519;
use Bzzhh\Pezos\Keys\PubKey;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Account;
use PHPUnit\Framework\TestCase;

class PubKeyTest extends TestCase
{
    /**
     * @dataProvider \Bzzhh\Pezos\Tests\Unit\DataProvider\Ed25519::accounts()
     */
    public function testEd25519(Account $account)
    {
        $pubKey = new PubKey($account->privateKey, new Ed25519());

        $this->assertSame($account->publicKey, $pubKey->getPublicKey());
        $this->assertSame($account->publicKeyHash, $pubKey->getAddress());
    }
}
