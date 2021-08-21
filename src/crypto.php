<?php

declare(strict_types=1);

namespace Bzzhh\Pezos;

use BitWasp\Buffertools\Buffer;
use BitWasp\Buffertools\BufferInterface;
use Tuupola\Base58;

function b58cencode(BufferInterface $payload, array $prefix): string
{
    $base58check = new Base58([
        'characters' => Base58::BITCOIN,
        'check'      => true,
        'version'    => $prefix[0],
    ]);

    $buf = pack('C*', ...\array_slice($prefix, 1)).$payload->getBinary();

    return $base58check->encode($buf);
}

function b58cdecode(string $payload, array $prefix): BufferInterface
{
    $base58check = new Base58([
        'characters' => Base58::BITCOIN,
        'check'      => true,
        'version'    => $prefix[0],
    ]);

    $decoded = $base58check->decode($payload);
    $buf     = unpack('C*', $decoded);
    $buf     = \array_slice($buf, \count(\array_slice($prefix, 1)));

    return new Buffer(pack('C*', ...$buf));
}

function blake2b(string $input, int $length = 32): string
{
    return sodium_crypto_generichash($input, '', $length);
}
