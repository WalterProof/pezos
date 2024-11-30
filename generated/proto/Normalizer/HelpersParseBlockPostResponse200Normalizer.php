<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Normalizer;

use Bzzhh\Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Bzzhh\Pezos\Generated\Proto\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HelpersParseBlockPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersParseBlockPostResponse200';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersParseBlockPostResponse200';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\HelpersParseBlockPostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('payload_hash', $data)) {
            $object->setPayloadHash($data['payload_hash']);
            unset($data['payload_hash']);
        }
        if (\array_key_exists('payload_round', $data)) {
            $object->setPayloadRound($data['payload_round']);
            unset($data['payload_round']);
        }
        if (\array_key_exists('proof_of_work_nonce', $data)) {
            $object->setProofOfWorkNonce($data['proof_of_work_nonce']);
            unset($data['proof_of_work_nonce']);
        }
        if (\array_key_exists('seed_nonce_hash', $data)) {
            $object->setSeedNonceHash($data['seed_nonce_hash']);
            unset($data['seed_nonce_hash']);
        }
        if (\array_key_exists('liquidity_baking_toggle_vote', $data)) {
            $object->setLiquidityBakingToggleVote($data['liquidity_baking_toggle_vote']);
            unset($data['liquidity_baking_toggle_vote']);
        }
        if (\array_key_exists('signature', $data)) {
            $object->setSignature($data['signature']);
            unset($data['signature']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['payload_hash'] = $object->getPayloadHash();
        $data['payload_round'] = $object->getPayloadRound();
        $data['proof_of_work_nonce'] = $object->getProofOfWorkNonce();
        if ($object->isInitialized('seedNonceHash') && null !== $object->getSeedNonceHash()) {
            $data['seed_nonce_hash'] = $object->getSeedNonceHash();
        }
        $data['liquidity_baking_toggle_vote'] = $object->getLiquidityBakingToggleVote();
        $data['signature'] = $object->getSignature();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}