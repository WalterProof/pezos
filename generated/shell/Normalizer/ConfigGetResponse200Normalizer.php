<?php

namespace Bzzhh\Pezos\Generated\Shell\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Bzzhh\Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ConfigGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\ConfigGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('data-dir', $data)) {
            $object->setDataDir($data['data-dir']);
        }
        if (\array_key_exists('rpc', $data)) {
            $object->setRpc($this->denormalizer->denormalize($data['rpc'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Rpc', 'json', $context));
        }
        if (\array_key_exists('p2p', $data)) {
            $object->setP2p($this->denormalizer->denormalize($data['p2p'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2p', 'json', $context));
        }
        if (\array_key_exists('log', $data)) {
            $object->setLog($this->denormalizer->denormalize($data['log'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Log', 'json', $context));
        }
        if (\array_key_exists('internal-events', $data)) {
            $object->setInternalEvents($this->denormalizer->denormalize($data['internal-events'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200InternalEvents', 'json', $context));
        }
        if (\array_key_exists('shell', $data)) {
            $object->setShell($this->denormalizer->denormalize($data['shell'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Shell', 'json', $context));
        }
        if (\array_key_exists('network', $data)) {
            $object->setNetwork($data['network']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDataDir()) {
            $data['data-dir'] = $object->getDataDir();
        }
        if (null !== $object->getRpc()) {
            $data['rpc'] = $this->normalizer->normalize($object->getRpc(), 'json', $context);
        }
        $data['p2p'] = $this->normalizer->normalize($object->getP2p(), 'json', $context);
        if (null !== $object->getLog()) {
            $data['log'] = $this->normalizer->normalize($object->getLog(), 'json', $context);
        }
        if (null !== $object->getInternalEvents()) {
            $data['internal-events'] = $this->normalizer->normalize($object->getInternalEvents(), 'json', $context);
        }
        if (null !== $object->getShell()) {
            $data['shell'] = $this->normalizer->normalize($object->getShell(), 'json', $context);
        }
        if (null !== $object->getNetwork()) {
            $data['network'] = $object->getNetwork();
        }
        return $data;
    }
}