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
class NetworkConnectionsGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsGetResponse200Item';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsGetResponse200Item';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\NetworkConnectionsGetResponse200Item();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('incoming', $data)) {
            $object->setIncoming($data['incoming']);
        }
        if (\array_key_exists('peer_id', $data)) {
            $object->setPeerId($data['peer_id']);
        }
        if (\array_key_exists('id_point', $data)) {
            $object->setIdPoint($this->denormalizer->denormalize($data['id_point'], 'Pezos\\Generated\\Shell\\Model\\P2pConnectionId', 'json', $context));
        }
        if (\array_key_exists('remote_socket_port', $data)) {
            $object->setRemoteSocketPort($data['remote_socket_port']);
        }
        if (\array_key_exists('announced_version', $data)) {
            $object->setAnnouncedVersion($this->denormalizer->denormalize($data['announced_version'], 'Pezos\\Generated\\Shell\\Model\\NetworkVersion', 'json', $context));
        }
        if (\array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
        }
        if (\array_key_exists('local_metadata', $data)) {
            $object->setLocalMetadata($this->denormalizer->denormalize($data['local_metadata'], 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsGetResponse200ItemLocalMetadata', 'json', $context));
        }
        if (\array_key_exists('remote_metadata', $data)) {
            $object->setRemoteMetadata($this->denormalizer->denormalize($data['remote_metadata'], 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsGetResponse200ItemRemoteMetadata', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['incoming'] = $object->getIncoming();
        $data['peer_id'] = $object->getPeerId();
        $data['id_point'] = $this->normalizer->normalize($object->getIdPoint(), 'json', $context);
        $data['remote_socket_port'] = $object->getRemoteSocketPort();
        $data['announced_version'] = $this->normalizer->normalize($object->getAnnouncedVersion(), 'json', $context);
        $data['private'] = $object->getPrivate();
        $data['local_metadata'] = $this->normalizer->normalize($object->getLocalMetadata(), 'json', $context);
        $data['remote_metadata'] = $this->normalizer->normalize($object->getRemoteMetadata(), 'json', $context);
        return $data;
    }
}