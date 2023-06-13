<?php

declare(strict_types=1);

return [
    'openapi-file' => 'https://gitlab.com/tezos/tezos/-/raw/master/docs/api/mumbai-openapi.json',
    'namespace'    => 'Bzzhh\Pezos\Generated\Proto',
    'directory'    => \dirname(__DIR__).'/generated/proto',
    'use-fixer'    => true,
];
