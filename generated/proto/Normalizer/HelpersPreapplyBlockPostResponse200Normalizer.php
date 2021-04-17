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
class HelpersPreapplyBlockPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shell_header', $data)) {
            $object->setShellHeader($this->denormalizer->denormalize($data['shell_header'], 'Pezos\\Generated\\Proto\\Model\\BlockHeaderShell', 'json', $context));
        }
        if (\array_key_exists('operations', $data)) {
            $values = array();
            foreach ($data['operations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200OperationsItem', 'json', $context);
            }
            $object->setOperations($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['shell_header'] = $this->normalizer->normalize($object->getShellHeader(), 'json', $context);
        $values = array();
        foreach ($object->getOperations() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['operations'] = $values;
        return $data;
    }
}