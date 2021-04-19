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
class ConfigGetResponse200P2pGreylistingConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2pGreylistingConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2pGreylistingConfig';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\ConfigGetResponse200P2pGreylistingConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('factor', $data)) {
            $object->setFactor($data['factor']);
        }
        if (\array_key_exists('initial-delay', $data)) {
            $object->setInitialDelay($data['initial-delay']);
        }
        if (\array_key_exists('disconnection-delay', $data)) {
            $object->setDisconnectionDelay($data['disconnection-delay']);
        }
        if (\array_key_exists('increase-cap', $data)) {
            $object->setIncreaseCap($data['increase-cap']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFactor()) {
            $data['factor'] = $object->getFactor();
        }
        if (null !== $object->getInitialDelay()) {
            $data['initial-delay'] = $object->getInitialDelay();
        }
        if (null !== $object->getDisconnectionDelay()) {
            $data['disconnection-delay'] = $object->getDisconnectionDelay();
        }
        if (null !== $object->getIncreaseCap()) {
            $data['increase-cap'] = $object->getIncreaseCap();
        }
        return $data;
    }
}