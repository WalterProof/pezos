<?php

namespace Pezos\Rpc;

use GuzzleHttp\Client as GuzzleHttpClient;

class Client
{
    private string $host;
    private ?GuzzleHttpClient $client = null;

    public function __construct(string $host)
    {
        $this->host = $host;
    }

    public function boostrapped()
    {
        return $this->getClient()
            ->get('/monitor/bootstrapped')
            ->getBody()
            ->getContents();
    }

    private function getClient(): GuzzleHttpClient
    {
        if (!$this->client) {
            $this->client = new GuzzleHttpClient([
                'base_uri' => $this->host,
            ]);
        }

        return $this->client;
    }
}
