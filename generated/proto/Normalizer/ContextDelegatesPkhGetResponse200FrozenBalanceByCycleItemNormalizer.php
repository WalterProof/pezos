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
class ContextDelegatesPkhGetResponse200FrozenBalanceByCycleItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\ContextDelegatesPkhGetResponse200FrozenBalanceByCycleItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\ContextDelegatesPkhGetResponse200FrozenBalanceByCycleItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\ContextDelegatesPkhGetResponse200FrozenBalanceByCycleItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cycle', $data)) {
            $object->setCycle($data['cycle']);
        }
        if (\array_key_exists('deposit', $data)) {
            $object->setDeposit($data['deposit']);
        }
        if (\array_key_exists('fees', $data)) {
            $object->setFees($data['fees']);
        }
        if (\array_key_exists('rewards', $data)) {
            $object->setRewards($data['rewards']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['cycle'] = $object->getCycle();
        $data['deposit'] = $object->getDeposit();
        $data['fees'] = $object->getFees();
        $data['rewards'] = $object->getRewards();
        return $data;
    }
}