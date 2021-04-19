<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\DataProvider;

class Signature
{
    public Account $account;
    public string $hex;
    public string $signature;
    public bool $valid;

    public function __construct(
        Account $account,
        string $hex,
        string $signature,
        bool $valid = true
    ) {
        $this->account   = $account;
        $this->hex       = $hex;
        $this->signature = $signature;
        $this->valid     = $valid;
    }
}
