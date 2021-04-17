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
class ContextContractsContractIdSingleSaplingGetDiffGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdSingleSaplingGetDiffGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdSingleSaplingGetDiffGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\ContextContractsContractIdSingleSaplingGetDiffGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('root', $data)) {
            $object->setRoot($data['root']);
        }
        if (\array_key_exists('commitments_and_ciphertexts', $data)) {
            $values = array();
            foreach ($data['commitments_and_ciphertexts'] as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setCommitmentsAndCiphertexts($values);
        }
        if (\array_key_exists('nullifiers', $data)) {
            $values_2 = array();
            foreach ($data['nullifiers'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setNullifiers($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['root'] = $object->getRoot();
        $values = array();
        foreach ($object->getCommitmentsAndCiphertexts() as $value) {
            $values_1 = array();
            foreach ($value as $value_1) {
                $values_1[] = $value_1;
            }
            $values[] = $values_1;
        }
        $data['commitments_and_ciphertexts'] = $values;
        $values_2 = array();
        foreach ($object->getNullifiers() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['nullifiers'] = $values_2;
        return $data;
    }
}