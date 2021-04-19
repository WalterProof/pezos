<?php

namespace Bzzhh\Pezos\Generated\Mempool\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Bzzhh\Pezos\Generated\Mempool\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PendingOperationsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Mempool\\Model\\PendingOperationsGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Mempool\\Model\\PendingOperationsGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('applied', $data)) {
            $values = array();
            foreach ($data['applied'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Bzzhh\\Pezos\\Generated\\Mempool\\Model\\PendingOperationsGetResponse200AppliedItem', 'json', $context);
            }
            $object->setApplied($values);
        }
        if (\array_key_exists('refused', $data)) {
            $values_1 = array();
            foreach ($data['refused'] as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setRefused($values_1);
        }
        if (\array_key_exists('branch_refused', $data)) {
            $values_3 = array();
            foreach ($data['branch_refused'] as $value_3) {
                $values_4 = array();
                foreach ($value_3 as $value_4) {
                    $values_4[] = $value_4;
                }
                $values_3[] = $values_4;
            }
            $object->setBranchRefused($values_3);
        }
        if (\array_key_exists('branch_delayed', $data)) {
            $values_5 = array();
            foreach ($data['branch_delayed'] as $value_5) {
                $values_6 = array();
                foreach ($value_5 as $value_6) {
                    $values_6[] = $value_6;
                }
                $values_5[] = $values_6;
            }
            $object->setBranchDelayed($values_5);
        }
        if (\array_key_exists('unprocessed', $data)) {
            $values_7 = array();
            foreach ($data['unprocessed'] as $value_7) {
                $values_8 = array();
                foreach ($value_7 as $value_8) {
                    $values_8[] = $value_8;
                }
                $values_7[] = $values_8;
            }
            $object->setUnprocessed($values_7);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getApplied() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['applied'] = $values;
        $values_1 = array();
        foreach ($object->getRefused() as $value_1) {
            $values_2 = array();
            foreach ($value_1 as $value_2) {
                $values_2[] = $value_2;
            }
            $values_1[] = $values_2;
        }
        $data['refused'] = $values_1;
        $values_3 = array();
        foreach ($object->getBranchRefused() as $value_3) {
            $values_4 = array();
            foreach ($value_3 as $value_4) {
                $values_4[] = $value_4;
            }
            $values_3[] = $values_4;
        }
        $data['branch_refused'] = $values_3;
        $values_5 = array();
        foreach ($object->getBranchDelayed() as $value_5) {
            $values_6 = array();
            foreach ($value_5 as $value_6) {
                $values_6[] = $value_6;
            }
            $values_5[] = $values_6;
        }
        $data['branch_delayed'] = $values_5;
        $values_7 = array();
        foreach ($object->getUnprocessed() as $value_7) {
            $values_8 = array();
            foreach ($value_7 as $value_8) {
                $values_8[] = $value_8;
            }
            $values_7[] = $values_8;
        }
        $data['unprocessed'] = $values_7;
        return $data;
    }
}