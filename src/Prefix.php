<?php

declare(strict_types=1);

namespace Bzzhh\Pezos;

class Prefix
{
    public const TZ1   = 'tz1';
    public const EDPK  = 'edpk';
    public const EDSK  = 'edsk';
    public const EDSIG = 'edsig';

    public const BYTES = [
        self::TZ1   => [6, 161, 159],
        self::EDPK  => [13, 15, 37, 217],
        self::EDSK  => [43, 246, 78, 7],
        self::EDSIG => [9, 245, 205, 134, 18],
    ];

    public const LENGTH = [
        self::TZ1   => 20,
        self::EDPK  => 32,
        self::EDSIG => 64,
    ];
}
