<?php

namespace Pezos\Generated\Proto\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContextDelegatesPkhGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\ContextDelegatesPkhGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\ContextDelegatesPkhGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\ContextDelegatesPkhGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
        }
        if (\array_key_exists('frozen_balance', $data)) {
            $object->setFrozenBalance($data['frozen_balance']);
        }
        if (\array_key_exists('frozen_balance_by_cycle', $data)) {
            $values = array();
            foreach ($data['frozen_balance_by_cycle'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Pezos\\Generated\\Proto\\Model\\ContextDelegatesPkhGetResponse200FrozenBalanceByCycleItem', 'json', $context);
            }
            $object->setFrozenBalanceByCycle($values);
        }
        if (\array_key_exists('staking_balance', $data)) {
            $object->setStakingBalance($data['staking_balance']);
        }
        if (\array_key_exists('delegated_contracts', $data)) {
            $values_1 = array();
            foreach ($data['delegated_contracts'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDelegatedContracts($values_1);
        }
        if (\array_key_exists('delegated_balance', $data)) {
            $object->setDelegatedBalance($data['delegated_balance']);
        }
        if (\array_key_exists('deactivated', $data)) {
            $object->setDeactivated($data['deactivated']);
        }
        if (\array_key_exists('grace_period', $data)) {
            $object->setGracePeriod($data['grace_period']);
        }
        if (\array_key_exists('voting_power', $data)) {
            $object->setVotingPower($data['voting_power']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['balance'] = $object->getBalance();
        $data['frozen_balance'] = $object->getFrozenBalance();
        $values = array();
        foreach ($object->getFrozenBalanceByCycle() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['frozen_balance_by_cycle'] = $values;
        $data['staking_balance'] = $object->getStakingBalance();
        $values_1 = array();
        foreach ($object->getDelegatedContracts() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['delegated_contracts'] = $values_1;
        $data['delegated_balance'] = $object->getDelegatedBalance();
        $data['deactivated'] = $object->getDeactivated();
        $data['grace_period'] = $object->getGracePeriod();
        $data['voting_power'] = $object->getVotingPower();
        return $data;
    }
}