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
class WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelinesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fetched_headers', $data)) {
            $object->setFetchedHeaders($data['fetched_headers']);
        }
        if (\array_key_exists('fetched_blocks', $data)) {
            $object->setFetchedBlocks($data['fetched_blocks']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['fetched_headers'] = $object->getFetchedHeaders();
        $data['fetched_blocks'] = $object->getFetchedBlocks();
        return $data;
    }
}