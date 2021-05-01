<?php

declare(strict_types=1);

namespace Bzzhh\Pezos;

class Prefix
{
    const TZ1   = 'tz1';
    const EDPK  = 'edpk';
    const EDSK  = 'edsk';
    const EDSIG = 'edsig';

    const BYTES = [
        self::TZ1   => [6, 161, 159],
        self::EDPK  => [13, 15, 37, 217],
        self::EDSK  => [43, 246, 78, 7],
        self::EDSIG => [9, 245, 205, 134, 18],
    ];

    const LENGTH = [
        self::TZ1   => 20,
        self::EDPK  => 32,
        self::EDSIG => 64,
    ];
}
