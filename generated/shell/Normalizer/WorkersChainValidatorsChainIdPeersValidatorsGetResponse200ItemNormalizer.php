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
class WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200Item';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200Item';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200Item();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('peer_id', $data)) {
            $object->setPeerId($data['peer_id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('information', $data)) {
            $object->setInformation($this->denormalizer->denormalize($data['information'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemInformation', 'json', $context));
        }
        if (\array_key_exists('pipelines', $data)) {
            $object->setPipelines($this->denormalizer->denormalize($data['pipelines'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['peer_id'] = $object->getPeerId();
        $data['status'] = $object->getStatus();
        $data['information'] = $this->normalizer->normalize($object->getInformation(), 'json', $context);
        $data['pipelines'] = $this->normalizer->normalize($object->getPipelines(), 'json', $context);
        return $data;
    }
}