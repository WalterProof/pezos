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
class _009PsFLorenScriptedTraceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\_009PsFLorenScriptedTraceItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\_009PsFLorenScriptedTraceItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\_009PsFLorenScriptedTraceItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('gas', $data)) {
            $object->setGas($data['gas']);
        }
        if (\array_key_exists('stack', $data)) {
            $values = array();
            foreach ($data['stack'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\_009PsFLorenScriptedTraceItemStackItem', 'json', $context);
            }
            $object->setStack($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['location'] = $object->getLocation();
        $data['gas'] = $object->getGas();
        $values = array();
        foreach ($object->getStack() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['stack'] = $values;
        return $data;
    }
}