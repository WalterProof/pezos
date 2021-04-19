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
class ConfigGetResponse200ShellPeerValidatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellPeerValidator';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellPeerValidator';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\ConfigGetResponse200ShellPeerValidator();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('block_header_request_timeout', $data)) {
            $object->setBlockHeaderRequestTimeout($data['block_header_request_timeout']);
        }
        if (\array_key_exists('block_operations_request_timeout', $data)) {
            $object->setBlockOperationsRequestTimeout($data['block_operations_request_timeout']);
        }
        if (\array_key_exists('protocol_request_timeout', $data)) {
            $object->setProtocolRequestTimeout($data['protocol_request_timeout']);
        }
        if (\array_key_exists('new_head_request_timeout', $data)) {
            $object->setNewHeadRequestTimeout($data['new_head_request_timeout']);
        }
        if (\array_key_exists('worker_backlog_size', $data)) {
            $object->setWorkerBacklogSize($data['worker_backlog_size']);
        }
        if (\array_key_exists('worker_backlog_level', $data)) {
            $object->setWorkerBacklogLevel($data['worker_backlog_level']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBlockHeaderRequestTimeout()) {
            $data['block_header_request_timeout'] = $object->getBlockHeaderRequestTimeout();
        }
        if (null !== $object->getBlockOperationsRequestTimeout()) {
            $data['block_operations_request_timeout'] = $object->getBlockOperationsRequestTimeout();
        }
        if (null !== $object->getProtocolRequestTimeout()) {
            $data['protocol_request_timeout'] = $object->getProtocolRequestTimeout();
        }
        if (null !== $object->getNewHeadRequestTimeout()) {
            $data['new_head_request_timeout'] = $object->getNewHeadRequestTimeout();
        }
        if (null !== $object->getWorkerBacklogSize()) {
            $data['worker_backlog_size'] = $object->getWorkerBacklogSize();
        }
        if (null !== $object->getWorkerBacklogLevel()) {
            $data['worker_backlog_level'] = $object->getWorkerBacklogLevel();
        }
        return $data;
    }
}