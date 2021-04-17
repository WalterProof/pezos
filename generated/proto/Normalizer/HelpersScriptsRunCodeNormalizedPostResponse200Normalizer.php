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
class HelpersScriptsRunCodeNormalizedPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\HelpersScriptsRunCodeNormalizedPostResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\HelpersScriptsRunCodeNormalizedPostResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\HelpersScriptsRunCodeNormalizedPostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('storage', $data)) {
            $object->setStorage($data['storage']);
        }
        if (\array_key_exists('operations', $data)) {
            $values = array();
            foreach ($data['operations'] as $value) {
                $values[] = $value;
            }
            $object->setOperations($values);
        }
        if (\array_key_exists('big_map_diff', $data)) {
            $values_1 = array();
            foreach ($data['big_map_diff'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setBigMapDiff($values_1);
        }
        if (\array_key_exists('lazy_storage_diff', $data)) {
            $values_2 = array();
            foreach ($data['lazy_storage_diff'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLazyStorageDiff($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['storage'] = $object->getStorage();
        $values = array();
        foreach ($object->getOperations() as $value) {
            $values[] = $value;
        }
        $data['operations'] = $values;
        if (null !== $object->getBigMapDiff()) {
            $values_1 = array();
            foreach ($object->getBigMapDiff() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['big_map_diff'] = $values_1;
        }
        if (null !== $object->getLazyStorageDiff()) {
            $values_2 = array();
            foreach ($object->getLazyStorageDiff() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['lazy_storage_diff'] = $values_2;
        }
        return $data;
    }
}