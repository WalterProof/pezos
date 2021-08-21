<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\DataProvider;

use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Account;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Signature;

class Ed25519
{
    private const ALICE = [
        'edskRgwZgrAsBSN4tN3b6iy6opofPVxsRkn2obRkP156p6bkprxL98hZyxExv6LyBm82BkAYo97uWyZgy96rDjuVM5FehPQMz2',
        'edpkvYdirUXWtuwdcxPnXkbX4gXeL7LNtji4Qionp71d3Nw6Hmqezz',
        'tz1UxbPFjP22Hmc4tz2cxEXUx3cz17W4L7ow',
    ];

    private const BOB = [
        'edskRwvobw55Fi53ikwAfo3LHwm74Dx4DwhKmM1Bz957TcVgGFhC9Ujnqq6tin4giethoLQCnfULNzGFQWxYqkKaFQbqX7euWu',
        'edpkv2ttLericWCYLjWsm1uXnWgUBjhTF8MFGLhyMawbjFW7v5Yvc3',
        'tz1iv68Lbh4v3PWeY7SypNMHgJ78DnS846fB',
    ];

    public static function accounts(): \Generator
    {
        yield 'alice' => [new Account(...static::ALICE)];
        yield 'bob' => [new Account(...static::BOB)];
    }

    public static function signatures(): \Generator
    {
        yield 'alice signature for "Hello" of type string' => [
            new Signature(
                new Account(...static::ALICE),
                '05010000000548656c6c6f',
                'edsigtxHb4HCsgf3zLLcTx4Rj23Y3CSJf8jaRXwoVHZJgSsMhzFoxKtinx2TT5FgYKprLVQ9nq8o93MCpmxaTuRB7igT9b6nZyf',
            ),
        ];
    }
}
