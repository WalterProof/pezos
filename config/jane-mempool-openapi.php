<?php

declare(strict_types=1);

return [
    'openapi-file' => 'https://gitlab.com/tezos/tezos/-/raw/master/docs/api/mumbai-mempool-openapi.json',
    'namespace'    => 'Bzzhh\Pezos\Generated\Mempool',
    'directory'    => \dirname(__DIR__).'/generated/mempool',
    'use-fixer'    => true,
];
