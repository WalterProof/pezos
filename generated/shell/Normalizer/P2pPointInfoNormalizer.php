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
class P2pPointInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\P2pPointInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\P2pPointInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\P2pPointInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('trusted', $data)) {
            $object->setTrusted($data['trusted']);
        }
        if (\array_key_exists('greylisted_until', $data)) {
            $object->setGreylistedUntil($data['greylisted_until']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('p2p_peer_id', $data)) {
            $object->setP2pPeerId($data['p2p_peer_id']);
        }
        if (\array_key_exists('last_failed_connection', $data)) {
            $object->setLastFailedConnection($data['last_failed_connection']);
        }
        if (\array_key_exists('last_rejected_connection', $data)) {
            $values = array();
            foreach ($data['last_rejected_connection'] as $value) {
                $values[] = $value;
            }
            $object->setLastRejectedConnection($values);
        }
        if (\array_key_exists('last_established_connection', $data)) {
            $values_1 = array();
            foreach ($data['last_established_connection'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLastEstablishedConnection($values_1);
        }
        if (\array_key_exists('last_disconnection', $data)) {
            $values_2 = array();
            foreach ($data['last_disconnection'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLastDisconnection($values_2);
        }
        if (\array_key_exists('last_seen', $data)) {
            $values_3 = array();
            foreach ($data['last_seen'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLastSeen($values_3);
        }
        if (\array_key_exists('last_miss', $data)) {
            $object->setLastMiss($data['last_miss']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['trusted'] = $object->getTrusted();
        if (null !== $object->getGreylistedUntil()) {
            $data['greylisted_until'] = $object->getGreylistedUntil();
        }
        $data['state'] = $object->getState();
        if (null !== $object->getP2pPeerId()) {
            $data['p2p_peer_id'] = $object->getP2pPeerId();
        }
        if (null !== $object->getLastFailedConnection()) {
            $data['last_failed_connection'] = $object->getLastFailedConnection();
        }
        if (null !== $object->getLastRejectedConnection()) {
            $values = array();
            foreach ($object->getLastRejectedConnection() as $value) {
                $values[] = $value;
            }
            $data['last_rejected_connection'] = $values;
        }
        if (null !== $object->getLastEstablishedConnection()) {
            $values_1 = array();
            foreach ($object->getLastEstablishedConnection() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['last_established_connection'] = $values_1;
        }
        if (null !== $object->getLastDisconnection()) {
            $values_2 = array();
            foreach ($object->getLastDisconnection() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['last_disconnection'] = $values_2;
        }
        if (null !== $object->getLastSeen()) {
            $values_3 = array();
            foreach ($object->getLastSeen() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['last_seen'] = $values_3;
        }
        if (null !== $object->getLastMiss()) {
            $data['last_miss'] = $object->getLastMiss();
        }
        return $data;
    }
}