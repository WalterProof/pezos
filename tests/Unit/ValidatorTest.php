<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Unit\Validator;

use Bzzhh\Pezos\Validator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    private Validator $validator;

    public function setUp(): void
    {
        $this->validator = new Validator();
    }

    #[DataProvider('provideAddresses')]
    public function testValidateAddress(
        string $address,
        bool $isValid,
        ?string $error = null
    ): void {
        self::assertSame($isValid, $this->validator->validateAddress($address));
        self::assertSame($error, $this->validator->getError());
    }

    public static function provideAddresses(): \Generator
    {
        yield ['xx', false, Validator::NO_PREFIX_MATCHED];

        yield [
            'tz1RzPWnTVr6wWMWPkQWK62zrHFSPESjXJFX',
            false,
            Validator::INVALID_CHECKSUM,
        ];

        yield ['tz1cXuba7T3qkxLVMuuYMsPpWtHeuQ6eqTck', true];
    }

    #[DataProvider('providePubKeys')]
    public function testValidatePubKey(
        string $pubKey,
        bool $isValid,
        ?string $error = null
    ): void {
        self::assertSame($isValid, $this->validator->validatePubKey($pubKey));
        self::assertSame($error, $this->validator->getError());
    }

    public static function providePubKeys(): \Generator
    {
        yield ['xx', false, Validator::NO_PREFIX_MATCHED];

        yield [
            'edpkvRHnehMGZP8SeaDsxArwvPA8nUizvwiHkCyRgaHYTd4qPHaq8h',
            false,
            Validator::INVALID_CHECKSUM,
        ];

        yield ['edpktmV1Dfn6uYKhXZ5bA19KQ26yqGkY3iNgRHtfu6hk5NKJoyggNS', true];
    }
}
