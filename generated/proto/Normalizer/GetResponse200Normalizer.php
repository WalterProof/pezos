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
class GetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\GetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\GetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\GetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('chain_id', $data)) {
            $object->setChainId($data['chain_id']);
        }
        if (\array_key_exists('hash', $data)) {
            $object->setHash($data['hash']);
        }
        if (\array_key_exists('header', $data)) {
            $object->setHeader($this->denormalizer->denormalize($data['header'], 'Pezos\\Generated\\Proto\\Model\\RawBlockHeader', 'json', $context));
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Pezos\\Generated\\Proto\\Model\\BlockHeaderMetadata', 'json', $context));
        }
        if (\array_key_exists('operations', $data)) {
            $values = array();
            foreach ($data['operations'] as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
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
        $data['protocol'] = $object->getProtocol();
        $data['chain_id'] = $object->getChainId();
        $data['hash'] = $object->getHash();
        $data['header'] = $this->normalizer->normalize($object->getHeader(), 'json', $context);
        if (null !== $object->getMetadata()) {
            $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        $values = array();
        foreach ($object->getOperations() as $value) {
            $values_1 = array();
            foreach ($value as $value_1) {
                $values_1[] = $value_1;
            }
            $values[] = $values_1;
        }
        $data['operations'] = $values;
        return $data;
    }
}