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
class ContextContractsContractIdEntrypointsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdEntrypointsGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdEntrypointsGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdEntrypointsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('unreachable', $data)) {
            $values = array();
            foreach ($data['unreachable'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdEntrypointsGetResponse200UnreachableItem', 'json', $context);
            }
            $object->setUnreachable($values);
        }
        if (\array_key_exists('entrypoints', $data)) {
            $object->setEntrypoints($this->denormalizer->denormalize($data['entrypoints'], 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdEntrypointsGetResponse200Entrypoints', 'json', $context));
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