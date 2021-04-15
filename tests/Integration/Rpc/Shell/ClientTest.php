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
        $version = $this->client->getVersion();
        self::assertSame(
            'TEZOS_EDO2NET_2021-02-11T14:00:00Z',
            $version->getNetworkVersion()->getChainName(),
        );
    }
}
