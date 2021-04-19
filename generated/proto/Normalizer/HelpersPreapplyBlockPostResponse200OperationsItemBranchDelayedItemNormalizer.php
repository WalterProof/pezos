<?php

namespace Bzzhh\Pezos\Generated\Proto\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Bzzhh\Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hash', $data)) {
            $object->setHash($data['hash']);
        }
        if (\array_key_exists('branch', $data)) {
            $object->setBranch($data['branch']);
        }
        if (\array_key_exists('data', $data)) {
            $object->setData($data['data']);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($data['error']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['hash'] = $object->getHash();
        $data['branch'] = $object->getBranch();
        $data['data'] = $object->getData();
        $data['error'] = $object->getError();
        return $data;
    }
}