<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Http;

use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Discovery\Psr17FactoryDiscovery;

class PluginFactory
{
    public static function createPathPlugin(string $uri): Plugin
    {
        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri($uri);

        return new AddPathPlugin($uri);
    }

    public static function createHostPlugin(string $uri): Plugin
    {
        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri($uri);

        return new AddHostPlugin($uri, [
            'replace' => true,
        ]);
    }
}
