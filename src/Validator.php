<?php

declare(strict_types=1);

namespace Pezos;

class Validator
{
    public const NO_PREFIX_MATCHED = 'No Prefix Matched';
    public const INVALID_CHECKSUM  = 'Invalid Checksum';
    public const INVALID_LENGTH    = 'Invalid Length';

    private ?string $error = null;

    public function getError(): ?string
    {
        return $this->error;
    }

    public function validateAddress(string $value): bool
    {
        return $this->validatePrefixedValue($value, [Prefix::TZ1]);
    }

    public function validatePubKey(string $value): bool
    {
        return $this->validatePrefixedValue($value, [Prefix::EDPK]);
    }

    private function validatePrefixedValue(string $value, array $prefixes): bool
    {
        $pattern = \sprintf('/^(%s)/', implode('|', $prefixes));

        if (0 === preg_match($pattern, $value, $matches)) {
            $this->error = static::NO_PREFIX_MATCHED;

            return false;
        }

        $prefixKey = $matches[0];

        try {
            $decoded = b58cdecode($value, Prefix::BYTES[$prefixKey]);
        } catch (\Throwable $t) {
            $this->error = static::INVALID_CHECKSUM;

            return false;
        }

        if (Prefix::LENGTH[$prefixKey] !== \strlen(hex2bin($decoded))) {
            $this->error = static::INVALID_LENGTH;

            return false;
        }

        return true;
    }
}
