<?php

namespace Bzzhh\Pezos\Generated\Proto\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Bzzhh\Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class VotesBallotsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\VotesBallotsGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\VotesBallotsGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\VotesBallotsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('yay', $data)) {
            $object->setYay($data['yay']);
        }
        if (\array_key_exists('nay', $data)) {
            $object->setNay($data['nay']);
        }
        if (\array_key_exists('pass', $data)) {
            $object->setPass($data['pass']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['yay'] = $object->getYay();
        $data['nay'] = $object->getNay();
        $data['pass'] = $object->getPass();
        return $data;
    }
}