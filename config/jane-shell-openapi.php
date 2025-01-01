<?php

declare(strict_types=1);

return [
    'openapi-file' => 'https://gitlab.com/tezos/tezos/-/raw/master/docs/api/rpc-openapi.json',
    'namespace'    => 'Pezos\Generated\Shell',
    'directory'    => \dirname(__DIR__) . '/generated/shell',
    'use-fixer'    => true,
];
