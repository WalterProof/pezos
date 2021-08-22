<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\DataProvider;

use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Account;
use Bzzhh\Pezos\Tests\Unit\DataProvider\Models\Signature;

class Secp256K1
{
    private const ALICE = [
        'spsk2cw2XMwVZujNsjqXaeUkaGaHDYU48rvuMjAVqxDySfc7TYT3oX',
        'sppk7cQY2iPnn4sSBQW9vGrsdpcegz9jGXo8BkNRSKRPntdxhzobmKK',
        'tz2MtBBnewk4ToQocPK8FzY7CGRdJdUBt16n',
    ];

    private const BOB = [
        'spsk3E5Eed7MkphK8YKuY3Uqt6kzvh57i6EsMm99o6LDe4q7Dm5kfY',
        'sppk7bcLR1Uyt7DBdi4RQiEj5y3DYmHWErZFuVgqqffTD1oDxkePVSw',
        'tz29SyXU5Ysch9kvPDY2EQFmPE1F3ZcHLb4F',
    ];

    public static function accounts(): \Generator
    {
        yield 'alice' => [new Account(...static::ALICE)];
        yield 'bob' => [new Account(...static::BOB)];
    }

    public static function signatures(): \Generator
    {
        yield 'alice signature' => [
            new Signature(
                new Account(...static::ALICE),
                // tezos-client hash data '"Hello"' of type string
                '05010000000548656c6c6f',
                // tezos-client sign bytes '0x05010000000548656c6c6f' for alice
                'spsig1f6UAm9sYiqBqvYpNzvD4WpPgesWjDfz35BKGuJsBZydtRVXXi9trhnq4vYCaKsb4ELsqZuSoJqdnKpWmjFiJ1gMgPEbhN',
            ),
        ];
    }
}
