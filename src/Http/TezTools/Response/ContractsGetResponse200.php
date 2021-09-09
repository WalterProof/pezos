<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Http\TezTools\Response;

use Bzzhh\Pezos\Http\TezTools\Denormalizer\ContractDenormalizer;
use Bzzhh\Pezos\Http\TezTools\Model\Contract;

class ContractsGetResponse200
{
    public array $contracts;

    public function getContracts(): array
    {
        $denormalizer = new ContractDenormalizer();

        return array_map(
            fn (array $contract): Contract => $denormalizer->denormalize(
                $contract,
                Contract::class,
            ),
            $this->contracts,
        );
    }
}
