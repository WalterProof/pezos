<?php

declare(strict_types=1);

namespace Tests\DataProvider;

class Signature
{
    public Account $account;
    public string $bytes;
    public string $signature;

    public function __construct(
        Account $account,
        string $bytes,
        string $signature
    ) {
        $this->account   = $account;
        $this->bytes     = $bytes;
        $this->signature = $signature;
    }
}
