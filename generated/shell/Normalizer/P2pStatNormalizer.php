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
class P2pStatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\P2pStat';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\P2pStat';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\P2pStat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('total_sent', $data)) {
            $object->setTotalSent($data['total_sent']);
        }
        if (\array_key_exists('total_recv', $data)) {
            $object->setTotalRecv($data['total_recv']);
        }
        if (\array_key_exists('current_inflow', $data)) {
            $object->setCurrentInflow($data['current_inflow']);
        }
        if (\array_key_exists('current_outflow', $data)) {
            $object->setCurrentOutflow($data['current_outflow']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['total_sent'] = $object->getTotalSent();
        $data['total_recv'] = $object->getTotalRecv();
        $data['current_inflow'] = $object->getCurrentInflow();
        $data['current_outflow'] = $object->getCurrentOutflow();
        return $data;
    }
}