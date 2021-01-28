<?php

declare(strict_types=1);

namespace Tests\Integration\Rpc;

use Pezos\Rpc\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    private Client $client;

    public function setUp(): void
    {
        $this->client = new Client($_SERVER['NODE_URL']);
    }

    public function testBoostrapped(): void
    {
        $this->assertStringContainsString(
            'block',
            $this->client->boostrapped()
        );
    }
}
