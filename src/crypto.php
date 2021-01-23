<?php

declare(strict_types=1);

namespace Pezos;

use BitWasp\Bitcoin\Base58;
use BitWasp\Buffertools\Buffer;
use BitWasp\Buffertools\BufferInterface;
use BitWasp\Buffertools\Buffertools;

function b58cencode(BufferInterface $payload, array $prefix): string
{
    return Base58::encodeCheck(
        Buffertools::concat(new Buffer(pack('C*', ...$prefix)), $payload)
    );
}

function b58cdecode(string $payload, array $prefix): Buffer
{
    return Base58::decodeCheck($payload)->slice(
        (new Buffer(pack('C*', ...$prefix)))->getSize()
    );
}

function blake2b(string $input, $length = 32): string
{
    return sodium_crypto_generichash($input, '', $length);
}
