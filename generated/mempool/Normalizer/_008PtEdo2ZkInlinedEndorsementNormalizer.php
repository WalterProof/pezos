<?php

namespace Bzzhh\Pezos\Generated\Mempool\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Bzzhh\Pezos\Generated\Mempool\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class _008PtEdo2ZkInlinedEndorsementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Mempool\\Model\\_008PtEdo2ZkInlinedEndorsement';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Mempool\\Model\\_008PtEdo2ZkInlinedEndorsement';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Mempool\Model\_008PtEdo2ZkInlinedEndorsement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branch', $data)) {
            $object->setBranch($data['branch']);
        }
        if (\array_key_exists('operations', $data)) {
            $object->setOperations($this->denormalizer->denormalize($data['operations'], 'Bzzhh\\Pezos\\Generated\\Mempool\\Model\\_008PtEdo2ZkInlinedEndorsementContents', 'json', $context));
        }
        if (\array_key_exists('signature', $data)) {
            $object->setSignature($data['signature']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['branch'] = $object->getBranch();
        $data['operations'] = $this->normalizer->normalize($object->getOperations(), 'json', $context);
        if (null !== $object->getSignature()) {
            $data['signature'] = $object->getSignature();
        }
        return $data;
    }
}