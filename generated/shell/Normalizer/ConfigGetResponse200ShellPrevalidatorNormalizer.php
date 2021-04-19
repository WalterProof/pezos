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
class ConfigGetResponse200ShellPrevalidatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellPrevalidator';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellPrevalidator';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\ConfigGetResponse200ShellPrevalidator();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('operations_request_timeout', $data)) {
            $object->setOperationsRequestTimeout($data['operations_request_timeout']);
        }
        if (\array_key_exists('max_refused_operations', $data)) {
            $object->setMaxRefusedOperations($data['max_refused_operations']);
        }
        if (\array_key_exists('operations_batch_size', $data)) {
            $object->setOperationsBatchSize($data['operations_batch_size']);
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
        if (null !== $object->getOperationsRequestTimeout()) {
            $data['operations_request_timeout'] = $object->getOperationsRequestTimeout();
        }
        if (null !== $object->getMaxRefusedOperations()) {
            $data['max_refused_operations'] = $object->getMaxRefusedOperations();
        }
        if (null !== $object->getOperationsBatchSize()) {
            $data['operations_batch_size'] = $object->getOperationsBatchSize();
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