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
class ContextContractsContractIdGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
        }
        if (\array_key_exists('delegate', $data)) {
            $object->setDelegate($data['delegate']);
        }
        if (\array_key_exists('script', $data)) {
            $object->setScript($this->denormalizer->denormalize($data['script'], 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\_009PsFLorenScriptedContracts', 'json', $context));
        }
        if (\array_key_exists('counter', $data)) {
            $object->setCounter($data['counter']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['balance'] = $object->getBalance();
        if (null !== $object->getDelegate()) {
            $data['delegate'] = $object->getDelegate();
        }
        if (null !== $object->getScript()) {
            $data['script'] = $this->normalizer->normalize($object->getScript(), 'json', $context);
        }
        if (null !== $object->getCounter()) {
            $data['counter'] = $object->getCounter();
        }
        return $data;
    }
}