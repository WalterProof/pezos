<?php

declare(strict_types=1);

namespace Pezos\Rpc;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Client
{
    private string $host;
    private ?HttpClientInterface $client = null;

    public function __construct(string $host)
    {
        $this->host = $host;
    }

    public function boostrapped()
    {
        return $this->getClient()
            ->request('GET', '/monitor/bootstrapped')
            ->getContent();
    }

    private function getClient(): HttpClientInterface
    {
        if (!$this->client) {
            $this->client = HttpClient::createForBaseUri($this->host);
        }

        return $this->client;
    }
}
