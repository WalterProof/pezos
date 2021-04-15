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
class VersionGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\VersionGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\VersionGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\VersionGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['version'], 'Pezos\\Generated\\Shell\\Model\\VersionGetResponse200Version', 'json', $context));
        }
        if (\array_key_exists('network_version', $data)) {
            $object->setNetworkVersion($this->denormalizer->denormalize($data['network_version'], 'Pezos\\Generated\\Shell\\Model\\NetworkVersion', 'json', $context));
        }
        if (\array_key_exists('commit_info', $data) && $data['commit_info'] !== null) {
            $object->setCommitInfo($data['commit_info']);
        }
        elseif (\array_key_exists('commit_info', $data) && $data['commit_info'] === null) {
            $object->setCommitInfo(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        $data['network_version'] = $this->normalizer->normalize($object->getNetworkVersion(), 'json', $context);
        $data['commit_info'] = $object->getCommitInfo();
        return $data;
    }
}