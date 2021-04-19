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
class MonitorValidBlocksGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\MonitorValidBlocksGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\MonitorValidBlocksGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\MonitorValidBlocksGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('chain_id', $data)) {
            $object->setChainId($data['chain_id']);
        }
        if (\array_key_exists('hash', $data)) {
            $object->setHash($data['hash']);
        }
        if (\array_key_exists('level', $data)) {
            $object->setLevel($data['level']);
        }
        if (\array_key_exists('proto', $data)) {
            $object->setProto($data['proto']);
        }
        if (\array_key_exists('predecessor', $data)) {
            $object->setPredecessor($data['predecessor']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp($data['timestamp']);
        }
        if (\array_key_exists('validation_pass', $data)) {
            $object->setValidationPass($data['validation_pass']);
        }
        if (\array_key_exists('operations_hash', $data)) {
            $object->setOperationsHash($data['operations_hash']);
        }
        if (\array_key_exists('fitness', $data)) {
            $values = array();
            foreach ($data['fitness'] as $value) {
                $values[] = $value;
            }
            $object->setFitness($values);
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
        }
        if (\array_key_exists('protocol_data', $data)) {
            $object->setProtocolData($data['protocol_data']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['chain_id'] = $object->getChainId();
        $data['hash'] = $object->getHash();
        $data['level'] = $object->getLevel();
        $data['proto'] = $object->getProto();
        $data['predecessor'] = $object->getPredecessor();
        $data['timestamp'] = $object->getTimestamp();
        $data['validation_pass'] = $object->getValidationPass();
        $data['operations_hash'] = $object->getOperationsHash();
        $values = array();
        foreach ($object->getFitness() as $value) {
            $values[] = $value;
        }
        $data['fitness'] = $values;
        $data['context'] = $object->getContext();
        $data['protocol_data'] = $object->getProtocolData();
        return $data;
    }
}