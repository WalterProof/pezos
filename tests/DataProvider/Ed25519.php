<?php

declare(strict_types=1);

namespace Tests\DataProvider;

class Ed25519
{
    public static function accounts(): \Generator
    {
        yield 'alice' => [Account::alice()];
        yield 'bob' => [Account::bob()];
    }

    public static function signatures(): \Generator
    {
        yield 'alice signature for "Hello" of type string' => [
            new Signature(
                Account::alice(),
                '05010000000548656c6c6f',
                'edsigtxHb4HCsgf3zLLcTx4Rj23Y3CSJf8jaRXwoVHZJgSsMhzFoxKtinx2TT5FgYKprLVQ9nq8o93MCpmxaTuRB7igT9b6nZyf'
            ),
        ];
    }
}
