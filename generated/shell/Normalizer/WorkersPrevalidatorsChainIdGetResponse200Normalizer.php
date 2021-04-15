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
class WorkersPrevalidatorsChainIdGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsChainIdGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsChainIdGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\WorkersPrevalidatorsChainIdGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('pending_requests', $data)) {
            $values = array();
            foreach ($data['pending_requests'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsChainIdGetResponse200PendingRequestsItem', 'json', $context);
            }
            $object->setPendingRequests($values);
        }
        if (\array_key_exists('backlog', $data)) {
            $values_1 = array();
            foreach ($data['backlog'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsChainIdGetResponse200BacklogItem', 'json', $context);
            }
            $object->setBacklog($values_1);
        }
        if (\array_key_exists('current_request', $data)) {
            $object->setCurrentRequest($this->denormalizer->denormalize($data['current_request'], 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsChainIdGetResponse200CurrentRequest', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['status'] = $object->getStatus();
        $values = array();
        foreach ($object->getPendingRequests() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['pending_requests'] = $values;
        $values_1 = array();
        foreach ($object->getBacklog() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['backlog'] = $values_1;
        if (null !== $object->getCurrentRequest()) {
            $data['current_request'] = $this->normalizer->normalize($object->getCurrentRequest(), 'json', $context);
        }
        return $data;
    }
}