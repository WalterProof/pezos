<?php

declare(strict_types=1);

return [
    'openapi-file' => 'https://gitlab.com/tezos/tezos/-/raw/master/docs/api/rpc-openapi.json',
    'namespace'    => 'Pezos\Generated\Rpc',
    'directory'    => \dirname(__DIR__) . '/generated/rpc',
    'use-fixer'    => true,
];
