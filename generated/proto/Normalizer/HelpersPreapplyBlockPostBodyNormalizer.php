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
class HelpersPreapplyBlockPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('protocol_data', $data)) {
            $object->setProtocolData($this->denormalizer->denormalize($data['protocol_data'], 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostBodyProtocolData', 'json', $context));
        }
        if (\array_key_exists('operations', $data)) {
            $values = array();
            foreach ($data['operations'] as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\NextOperation', 'json', $context);
                }
                $values[] = $values_1;
            }
            $object->setOperations($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['protocol_data'] = $this->normalizer->normalize($object->getProtocolData(), 'json', $context);
        $values = array();
        foreach ($object->getOperations() as $value) {
            $values_1 = array();
            foreach ($value as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $values[] = $values_1;
        }
        $data['operations'] = $values;
        return $data;
    }
}