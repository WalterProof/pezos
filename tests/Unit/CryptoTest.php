<?php

declare(strict_types=1);

namespace Pezos\Tests\Unit\Validator;

use Pezos\Prefix;
use PHPUnit\Framework\TestCase;

use function Pezos\b58cdecode;
use function Pezos\b58cencode;

class CryptoTest extends TestCase
{
    public function testBase58Decoding()
    {
        self::assertSame(
            'b72cb1fef08993d8c53d7db31a6e9008c790569eba3710ee217a7f2aa6247e21',
            b58cdecode(
                'edpkv2ttLericWCYLjWsm1uXnWgUBjhTF8MFGLhyMawbjFW7v5Yvc3',
                Prefix::BYTES[Prefix::EDPK],
            ),
        );

        self::assertSame(
            '663be8c5c57ee773f1631266fe4a356e06cb4929',
            b58cdecode(
                'tz1UxbPFjP22Hmc4tz2cxEXUx3cz17W4L7ow',
                Prefix::BYTES[Prefix::TZ1],
            ),
        );
    }

    public function testBase58Encoding()
    {
        self::assertSame(
            'edpkv2ttLericWCYLjWsm1uXnWgUBjhTF8MFGLhyMawbjFW7v5Yvc3',
            b58cencode(
                'b72cb1fef08993d8c53d7db31a6e9008c790569eba3710ee217a7f2aa6247e21',
                Prefix::BYTES[Prefix::EDPK],
            ),
        );

        self::assertSame(
            'tz1UxbPFjP22Hmc4tz2cxEXUx3cz17W4L7ow',
            b58cencode(
                '663be8c5c57ee773f1631266fe4a356e06cb4929',
                Prefix::BYTES[Prefix::TZ1],
            ),
        );
    }
}
