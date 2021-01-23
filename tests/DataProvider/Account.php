<?php

declare(strict_types=1);

namespace Tests\DataProvider;

class Account
{
    public string $privateKey;
    public string $publicKey;
    public string $publicKeyHash;

    public function __construct(
        string $privateKey,
        string $publicKey,
        string $publicKeyHash
    ) {
        $this->privateKey    = $privateKey;
        $this->publicKey     = $publicKey;
        $this->publicKeyHash = $publicKeyHash;
    }
}
