<?php

declare(strict_types=1);

namespace Pezos\Rpc;

use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Pezos\Generated\Mempool\Client as MempoolClient;
use Pezos\Generated\Proto\Client as ProtoClient;
use Pezos\Generated\Shell\Client as ShellClient;

class ClientFactory
{
    public static function createProto(string $host, string $path): ProtoClient
    {
        $pluginClient = new PluginClient(HttpClientDiscovery::find(), [
            static::createHostPlugin($host),
            static::createPathPlugin($path),
        ]);

        return ProtoClient::create($pluginClient);
    }

    public static function createMempool(
        string $host,
        string $path
    ): MempoolClient {
        $pluginClient = new PluginClient(HttpClientDiscovery::find(), [
            static::createHostPlugin($host),
            static::createPathPlugin($path),
        ]);

        return MempoolClient::create($pluginClient);
    }

    public static function createShell(string $host): ShellClient
    {
        $pluginClient = new PluginClient(HttpClientDiscovery::find(), [
            static::createHostPlugin($host),
        ]);

        return ShellClient::create($pluginClient);
    }

    private static function createPathPlugin(string $uri): Plugin
    {
        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri($uri);

        return new AddPathPlugin($uri);
    }

    private static function createHostPlugin(string $uri): Plugin
    {
        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri($uri);

        return new AddHostPlugin($uri, [
            'replace' => true,
        ]);
    }
}
