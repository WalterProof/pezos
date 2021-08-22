<?php

declare(strict_types=1);

namespace Bzzhh\Pezos;

class Prefix
{
    public const TZ1   = 'tz1';
    public const TZ2   = 'tz2';
    public const EDPK  = 'edpk';
    public const SPPK  = 'sppk';
    public const EDSK  = 'edsk';
    public const SPSK  = 'spsk';
    public const EDSIG = 'edsig';
    public const SPSIG = 'spsig';

    public const BYTES = [
        self::TZ1   => [6, 161, 159],
        self::TZ2   => [6, 161, 161],
        self::EDPK  => [13, 15, 37, 217],
        self::SPPK  => [3, 254, 226, 86],
        self::EDSK  => [43, 246, 78, 7],
        self::SPSK  => [17, 162, 224, 201],
        self::EDSIG => [9, 245, 205, 134, 18],
        self::SPSIG => [13, 115, 101, 19, 63],
    ];

    public const LENGTH = [
        self::TZ1   => 20,
        self::TZ2   => 20,
        self::EDPK  => 32,
        self::SPPK  => 33,
        self::EDSIG => 64,
    ];
}
