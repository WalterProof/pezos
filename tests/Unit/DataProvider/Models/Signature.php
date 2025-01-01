<?php

declare(strict_types=1);

namespace Pezos\Tests\Unit\DataProvider\Models;

class Signature
{
    public Account $account;
    public string $message;
    public string $signature;
    public bool $valid;

    public function __construct(
        Account $account,
        string $message,
        string $signature,
        bool $valid = true,
    ) {
        $this->account   = $account;
        $this->message   = $message;
        $this->signature = $signature;
        $this->valid     = $valid;
    }
}
