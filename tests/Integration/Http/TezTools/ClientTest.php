<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Integration\Http\TezTools;

use Bzzhh\Pezos\Http\TezTools\Client;
use Bzzhh\Pezos\Http\TezTools\Model\Contract;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    private Client $client;

    public function setUp(): void
    {
        $this->client = Client::create();
    }

    public function testFetchContracts(): void
    {
        $contracts = $this->client->fetchContracts();
        self::assertInstanceOf(Contract::class, array_pop($contracts));
    }
}
