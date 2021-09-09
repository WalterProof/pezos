<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Http\TezTools\Response;

use Bzzhh\Pezos\Http\TezTools\Model\Contract;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ContractsGetResponse200
{
    /**
     * @var Contract[]
     */
    public array $contracts;

    public function setContracts(array $contracts): void
    {
        $objectNormalizer = new ObjectNormalizer();

        foreach ($contracts as $data) {
            $contract = $objectNormalizer->denormalize($data, Contract::class);

            if (isset($data['tokenAddress'])) {
                if (isset($data['tokenId'])) {
                    $contract->identifier = sprintf(
                        '%s_%d',
                        $data['tokenAddress'],
                        $data['tokenId'],
                    );
                } else {
                    $contract->identifier = $data['tokenAddress'];
                }
            }

            if (!isset($data['symbol'])) {
                $contract->symbol = 'UNKNOWN';
            }

            $this->contracts[] = $contract;
        }
    }
}
