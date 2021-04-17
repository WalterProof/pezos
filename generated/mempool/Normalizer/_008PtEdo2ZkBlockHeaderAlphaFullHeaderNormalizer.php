<?php

namespace Pezos\Generated\Mempool\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Pezos\Generated\Mempool\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class _008PtEdo2ZkBlockHeaderAlphaFullHeaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Mempool\\Model\\_008PtEdo2ZkBlockHeaderAlphaFullHeader';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Mempool\\Model\\_008PtEdo2ZkBlockHeaderAlphaFullHeader';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Mempool\Model\_008PtEdo2ZkBlockHeaderAlphaFullHeader();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('proof_of_work_nonce', $data)) {
            $object->setProofOfWorkNonce($data['proof_of_work_nonce']);
        }
        if (\array_key_exists('seed_nonce_hash', $data)) {
            $object->setSeedNonceHash($data['seed_nonce_hash']);
        }
        if (\array_key_exists('signature', $data)) {
            $object->setSignature($data['signature']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
        $data['priority'] = $object->getPriority();
        $data['proof_of_work_nonce'] = $object->getProofOfWorkNonce();
        if (null !== $object->getSeedNonceHash()) {
            $data['seed_nonce_hash'] = $object->getSeedNonceHash();
        }
        $data['signature'] = $object->getSignature();
        return $data;
    }
}