<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Bridge\Symfony;

use Bzzhh\Pezos\Generated\Mempool\Client as MempoolClient;
use Bzzhh\Pezos\Generated\Proto\Client as ProtoClient;
use Bzzhh\Pezos\Generated\Shell\Client as ShellClient;
use Bzzhh\Pezos\Http\ClientFactory;

class RpcFactory
{
    private string $host;

    public function __construct(string $host)
    {
        $this->host = $host;
    }

    public function createShell(): ShellClient
    {
        return ClientFactory::createShell($this->host);
    }

    public function createProto(): ProtoClient
    {
        return ClientFactory::createProto(
            $this->host,
            '/chains/main/blocks/head',
        );
    }

    public function createMempool(): MempoolClient
    {
        return ClientFactory::createMempool(
            $this->host,
            '/chains/main/mempool',
        );
    }
}
