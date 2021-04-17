<?php

declare(strict_types=1);

namespace Tests\Integration\Rpc\Shell;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Pezos\Generated\Shell\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    private Client $client;

    public function setUp(): void
    {
        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri(
            $_SERVER['NODE_URL'],
        );

        $plugin = new AddHostPlugin($uri, [
            'replace' => true,
        ]);

        $pluginClient = new PluginClient(HttpClientDiscovery::find(), [
            $plugin,
        ]);

        $this->client = Client::create($pluginClient);
    }

    public function testBoostrapped(): void
    {
        $bootstrapped = $this->client->getChainsByChainIdIsBootstrapped('main');
        self::assertTrue($bootstrapped->getBootstrapped());
        self::assertSame('synced', $bootstrapped->getSyncState());
    }
}
