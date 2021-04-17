<?php

namespace Pezos\Generated\Proto\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SaplingTransactionCiphertextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\SaplingTransactionCiphertext';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\SaplingTransactionCiphertext';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\SaplingTransactionCiphertext();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cv', $data)) {
            $object->setCv($data['cv']);
        }
        if (\array_key_exists('epk', $data)) {
            $object->setEpk($data['epk']);
        }
        if (\array_key_exists('payload_enc', $data)) {
            $object->setPayloadEnc($data['payload_enc']);
        }
        if (\array_key_exists('nonce_enc', $data)) {
            $object->setNonceEnc($data['nonce_enc']);
        }
        if (\array_key_exists('payload_out', $data)) {
            $object->setPayloadOut($data['payload_out']);
        }
        if (\array_key_exists('nonce_out', $data)) {
            $object->setNonceOut($data['nonce_out']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['cv'] = $object->getCv();
        $data['epk'] = $object->getEpk();
        $data['payload_enc'] = $object->getPayloadEnc();
        $data['nonce_enc'] = $object->getNonceEnc();
        $data['payload_out'] = $object->getPayloadOut();
        $data['nonce_out'] = $object->getNonceOut();
        return $data;
    }
}