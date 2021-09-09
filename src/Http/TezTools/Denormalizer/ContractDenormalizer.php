<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Http\TezTools\Denormalizer;

use Bzzhh\Pezos\Http\TezTools\Model\Contract;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\ContextAwareDenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ContractDenormalizer implements ContextAwareDenormalizerInterface, CacheableSupportsMethodInterface
{
    private ObjectNormalizer $objectNormalizer;

    public function __construct()
    {
        $this->objectNormalizer = new ObjectNormalizer();
    }

    public function denormalize(
        $data,
        string $type,
        string $format = null,
        array $context = []
    ) {
        $contract = $this->objectNormalizer->denormalize(
            $data,
            Contract::class,
        );

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

        return $contract;
    }

    public function supportsDenormalization(
        $data,
        string $type,
        string $format = null,
        array $context = []
    ) {
        return Contract::class === $type;
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
