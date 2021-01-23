<?php

declare(strict_types=1);

namespace Tests\DataProvider;

class Ed25519
{
    public static function accounts(): \Generator
    {
        yield 'alice' => [
            new Account(
                'edskRgwZgrAsBSN4tN3b6iy6opofPVxsRkn2obRkP156p6bkprxL98hZyxExv6LyBm82BkAYo97uWyZgy96rDjuVM5FehPQMz2',
                'edpkvYdirUXWtuwdcxPnXkbX4gXeL7LNtji4Qionp71d3Nw6Hmqezz',
                'tz1UxbPFjP22Hmc4tz2cxEXUx3cz17W4L7ow'
            ),
        ];

        yield 'bob' => [
            new Account(
                'edskRwvobw55Fi53ikwAfo3LHwm74Dx4DwhKmM1Bz957TcVgGFhC9Ujnqq6tin4giethoLQCnfULNzGFQWxYqkKaFQbqX7euWu',
                'edpkv2ttLericWCYLjWsm1uXnWgUBjhTF8MFGLhyMawbjFW7v5Yvc3',
                'tz1iv68Lbh4v3PWeY7SypNMHgJ78DnS846fB'
            ),
        ];
    }
}
