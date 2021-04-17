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
class HelpersScriptsEntrypointsPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\HelpersScriptsEntrypointsPostResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\HelpersScriptsEntrypointsPostResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('unreachable', $data)) {
            $values = array();
            foreach ($data['unreachable'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Pezos\\Generated\\Proto\\Model\\HelpersScriptsEntrypointsPostResponse200UnreachableItem', 'json', $context);
            }
            $object->setUnreachable($values);
        }
        if (\array_key_exists('entrypoints', $data)) {
            $object->setEntrypoints($this->denormalizer->denormalize($data['entrypoints'], 'Pezos\\Generated\\Proto\\Model\\HelpersScriptsEntrypointsPostResponse200Entrypoints', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUnreachable()) {
            $values = array();
            foreach ($object->getUnreachable() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['unreachable'] = $values;
        }
        $data['entrypoints'] = $this->normalizer->normalize($object->getEntrypoints(), 'json', $context);
        return $data;
    }
}