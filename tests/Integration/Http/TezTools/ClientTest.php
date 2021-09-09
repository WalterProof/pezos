<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Integration\Http\TezTools;

use Bzzhh\Pezos\Http\TezTools\Client;
use Bzzhh\Pezos\Http\TezTools\Model\Contract;
use Bzzhh\Pezos\Http\TezTools\Response\ContractsGetResponse200;
use Bzzhh\Pezos\Http\TezTools\Response\XtzPriceGetResponse200;
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
        $resp = $this->client->fetchContracts();
        self::assertInstanceOf(ContractsGetResponse200::class, $resp);
        self::assertInstanceOf(Contract::class, current($resp->contracts));
    }

    public function testFetchXtzPrice(): void
    {
        $resp = $this->client->fetchXtzPrice();
        self::assertInstanceOf(XtzPriceGetResponse200::class, $resp);
        self::assertInstanceOf(\DateTimeImmutable::class, $resp->updated);
    }
}
