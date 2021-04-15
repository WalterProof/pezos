<?php

namespace Pezos\Generated\Shell\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ConfigGetResponse200ShellNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Shell';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Shell';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\ConfigGetResponse200Shell();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('peer_validator', $data)) {
            $object->setPeerValidator($this->denormalizer->denormalize($data['peer_validator'], 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellPeerValidator', 'json', $context));
        }
        if (\array_key_exists('block_validator', $data)) {
            $object->setBlockValidator($this->denormalizer->denormalize($data['block_validator'], 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellBlockValidator', 'json', $context));
        }
        if (\array_key_exists('prevalidator', $data)) {
            $object->setPrevalidator($this->denormalizer->denormalize($data['prevalidator'], 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellPrevalidator', 'json', $context));
        }
        if (\array_key_exists('chain_validator', $data)) {
            $object->setChainValidator($data['chain_validator']);
        }
        if (\array_key_exists('history_mode', $data)) {
            $object->setHistoryMode($data['history_mode']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPeerValidator()) {
            $data['peer_validator'] = $this->normalizer->normalize($object->getPeerValidator(), 'json', $context);
        }
        if (null !== $object->getBlockValidator()) {
            $data['block_validator'] = $this->normalizer->normalize($object->getBlockValidator(), 'json', $context);
        }
        if (null !== $object->getPrevalidator()) {
            $data['prevalidator'] = $this->normalizer->normalize($object->getPrevalidator(), 'json', $context);
        }
        if (null !== $object->getChainValidator()) {
            $data['chain_validator'] = $object->getChainValidator();
        }
        if (null !== $object->getHistoryMode()) {
            $data['history_mode'] = $object->getHistoryMode();
        }
        return $data;
    }
}