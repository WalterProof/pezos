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
class WorkersChainValidatorsChainIdDdbGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdDdbGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdDdbGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('p2p_readers', $data)) {
            $object->setP2pReaders($data['p2p_readers']);
        }
        if (\array_key_exists('active_chains', $data)) {
            $object->setActiveChains($data['active_chains']);
        }
        if (\array_key_exists('operation_db', $data)) {
            $object->setOperationDb($this->denormalizer->denormalize($data['operation_db'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdDdbGetResponse200OperationDb', 'json', $context));
        }
        if (\array_key_exists('operations_db', $data)) {
            $object->setOperationsDb($this->denormalizer->denormalize($data['operations_db'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdDdbGetResponse200OperationsDb', 'json', $context));
        }
        if (\array_key_exists('block_header_db', $data)) {
            $object->setBlockHeaderDb($this->denormalizer->denormalize($data['block_header_db'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDb', 'json', $context));
        }
        if (\array_key_exists('active_connections', $data)) {
            $object->setActiveConnections($data['active_connections']);
        }
        if (\array_key_exists('active_peers', $data)) {
            $object->setActivePeers($data['active_peers']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['p2p_readers'] = $object->getP2pReaders();
        $data['active_chains'] = $object->getActiveChains();
        $data['operation_db'] = $this->normalizer->normalize($object->getOperationDb(), 'json', $context);
        $data['operations_db'] = $this->normalizer->normalize($object->getOperationsDb(), 'json', $context);
        $data['block_header_db'] = $this->normalizer->normalize($object->getBlockHeaderDb(), 'json', $context);
        $data['active_connections'] = $object->getActiveConnections();
        $data['active_peers'] = $object->getActivePeers();
        return $data;
    }
}