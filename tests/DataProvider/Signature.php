<?php

declare(strict_types=1);

namespace Tests\DataProvider;

class Signature
{
    public Account $account;
    public string $hex;
    public string $signature;

    public function __construct(
        Account $account,
        string $hex,
        string $signature
    ) {
        $this->account   = $account;
        $this->hex       = $hex;
        $this->signature = $signature;
    }
}
