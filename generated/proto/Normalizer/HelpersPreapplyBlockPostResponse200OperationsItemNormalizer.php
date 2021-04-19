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
class HelpersPreapplyBlockPostResponse200OperationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200OperationsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200OperationsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostResponse200OperationsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('applied', $data)) {
            $values = array();
            foreach ($data['applied'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem', 'json', $context);
            }
            $object->setApplied($values);
        }
        if (\array_key_exists('refused', $data)) {
            $values_1 = array();
            foreach ($data['refused'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem', 'json', $context);
            }
            $object->setRefused($values_1);
        }
        if (\array_key_exists('branch_refused', $data)) {
            $values_2 = array();
            foreach ($data['branch_refused'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200OperationsItemBranchRefusedItem', 'json', $context);
            }
            $object->setBranchRefused($values_2);
        }
        if (\array_key_exists('branch_delayed', $data)) {
            $values_3 = array();
            foreach ($data['branch_delayed'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem', 'json', $context);
            }
            $object->setBranchDelayed($values_3);
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
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['refused'] = $values_1;
        $values_2 = array();
        foreach ($object->getBranchRefused() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['branch_refused'] = $values_2;
        $values_3 = array();
        foreach ($object->getBranchDelayed() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['branch_delayed'] = $values_3;
        return $data;
    }
}