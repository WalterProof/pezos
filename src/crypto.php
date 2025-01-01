<?php

declare(strict_types=1);

namespace Pezos;

use Tuupola\Base58;

function b58cencode(string $hex, array $prefix): string
{
    $base58check = new Base58([
        'characters' => Base58::BITCOIN,
        'check'      => true,
        'version'    => $prefix[0],
    ]);

    $bytes = pack('C*', ...\array_slice($prefix, 1)) . hex2bin($hex);

    return $base58check->encode($bytes);
}

function b58cdecode(string $payload, array $prefix): string
{
    $base58check = new Base58([
        'characters' => Base58::BITCOIN,
        'check'      => true,
        'version'    => $prefix[0],
    ]);

    $decoded = $base58check->decode($payload);
    $bytes   = pack(
        'C*',
        ...\array_slice(
            unpack('C*', $decoded),
            \count(\array_slice($prefix, 1)),
        ),
    );

    return bin2hex($bytes);
}

function blake2b(string $input, int $length = 32): string
{
    return sodium_crypto_generichash($input, '', $length);
}
