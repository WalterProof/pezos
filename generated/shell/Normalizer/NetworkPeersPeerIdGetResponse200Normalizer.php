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
class NetworkPeersPeerIdGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\NetworkPeersPeerIdGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
        }
        if (\array_key_exists('trusted', $data)) {
            $object->setTrusted($data['trusted']);
        }
        if (\array_key_exists('conn_metadata', $data)) {
            $object->setConnMetadata($this->denormalizer->denormalize($data['conn_metadata'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200ConnMetadata', 'json', $context));
        }
        if (\array_key_exists('peer_metadata', $data)) {
            $object->setPeerMetadata($this->denormalizer->denormalize($data['peer_metadata'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadata', 'json', $context));
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('reachable_at', $data)) {
            $object->setReachableAt($this->denormalizer->denormalize($data['reachable_at'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\P2pConnectionId', 'json', $context));
        }
        if (\array_key_exists('stat', $data)) {
            $object->setStat($this->denormalizer->denormalize($data['stat'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\P2pStat', 'json', $context));
        }
        if (\array_key_exists('last_failed_connection', $data)) {
            $values = array();
            foreach ($data['last_failed_connection'] as $value) {
                $values[] = $value;
            }
            $object->setLastFailedConnection($values);
        }
        if (\array_key_exists('last_rejected_connection', $data)) {
            $values_1 = array();
            foreach ($data['last_rejected_connection'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLastRejectedConnection($values_1);
        }
        if (\array_key_exists('last_established_connection', $data)) {
            $values_2 = array();
            foreach ($data['last_established_connection'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLastEstablishedConnection($values_2);
        }
        if (\array_key_exists('last_disconnection', $data)) {
            $values_3 = array();
            foreach ($data['last_disconnection'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLastDisconnection($values_3);
        }
        if (\array_key_exists('last_seen', $data)) {
            $values_4 = array();
            foreach ($data['last_seen'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setLastSeen($values_4);
        }
        if (\array_key_exists('last_miss', $data)) {
            $values_5 = array();
            foreach ($data['last_miss'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setLastMiss($values_5);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['score'] = $object->getScore();
        $data['trusted'] = $object->getTrusted();
        if (null !== $object->getConnMetadata()) {
            $data['conn_metadata'] = $this->normalizer->normalize($object->getConnMetadata(), 'json', $context);
        }
        $data['peer_metadata'] = $this->normalizer->normalize($object->getPeerMetadata(), 'json', $context);
        $data['state'] = $object->getState();
        if (null !== $object->getReachableAt()) {
            $data['reachable_at'] = $this->normalizer->normalize($object->getReachableAt(), 'json', $context);
        }
        $data['stat'] = $this->normalizer->normalize($object->getStat(), 'json', $context);
        if (null !== $object->getLastFailedConnection()) {
            $values = array();
            foreach ($object->getLastFailedConnection() as $value) {
                $values[] = $value;
            }
            $data['last_failed_connection'] = $values;
        }
        if (null !== $object->getLastRejectedConnection()) {
            $values_1 = array();
            foreach ($object->getLastRejectedConnection() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['last_rejected_connection'] = $values_1;
        }
        if (null !== $object->getLastEstablishedConnection()) {
            $values_2 = array();
            foreach ($object->getLastEstablishedConnection() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['last_established_connection'] = $values_2;
        }
        if (null !== $object->getLastDisconnection()) {
            $values_3 = array();
            foreach ($object->getLastDisconnection() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['last_disconnection'] = $values_3;
        }
        if (null !== $object->getLastSeen()) {
            $values_4 = array();
            foreach ($object->getLastSeen() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['last_seen'] = $values_4;
        }
        if (null !== $object->getLastMiss()) {
            $values_5 = array();
            foreach ($object->getLastMiss() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['last_miss'] = $values_5;
        }
        return $data;
    }
}