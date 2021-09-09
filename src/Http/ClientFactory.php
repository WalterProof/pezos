<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Http;

use Bzzhh\Pezos\Generated\Mempool\Client as MempoolClient;
use Bzzhh\Pezos\Generated\Proto\Client as ProtoClient;
use Bzzhh\Pezos\Generated\Shell\Client as ShellClient;
use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;

class ClientFactory
{
    public static function createProto(string $host, string $path): ProtoClient
    {
        $pluginClient = new PluginClient(HttpClientDiscovery::find(), [
            PluginFactory::createHostPlugin($host),
            PluginFactory::createPathPlugin($path),
        ]);

        return ProtoClient::create($pluginClient);
    }

    public static function createMempool(
        string $host,
        string $path
    ): MempoolClient {
        $pluginClient = new PluginClient(HttpClientDiscovery::find(), [
            PluginFactory::createHostPlugin($host),
            PluginFactory::createPathPlugin($path),
        ]);

        return MempoolClient::create($pluginClient);
    }

    public static function createShell(string $host): ShellClient
    {
        $pluginClient = new PluginClient(HttpClientDiscovery::find(), [
            PluginFactory::createHostPlugin($host),
        ]);

        return ShellClient::create($pluginClient);
    }
}
