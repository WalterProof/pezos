<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\DataProvider;

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

    public static function alice(): self
    {
        return new self(
            'edskRgwZgrAsBSN4tN3b6iy6opofPVxsRkn2obRkP156p6bkprxL98hZyxExv6LyBm82BkAYo97uWyZgy96rDjuVM5FehPQMz2',
            'edpkvYdirUXWtuwdcxPnXkbX4gXeL7LNtji4Qionp71d3Nw6Hmqezz',
            'tz1UxbPFjP22Hmc4tz2cxEXUx3cz17W4L7ow',
        );
    }

    public static function bob(): self
    {
        return new self(
            'edskRwvobw55Fi53ikwAfo3LHwm74Dx4DwhKmM1Bz957TcVgGFhC9Ujnqq6tin4giethoLQCnfULNzGFQWxYqkKaFQbqX7euWu',
            'edpkv2ttLericWCYLjWsm1uXnWgUBjhTF8MFGLhyMawbjFW7v5Yvc3',
            'tz1iv68Lbh4v3PWeY7SypNMHgJ78DnS846fB',
        );
    }
}
