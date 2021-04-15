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
class ChainsChainIdCheckpointGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\ChainsChainIdCheckpointGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\ChainsChainIdCheckpointGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\ChainsChainIdCheckpointGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('block', $data)) {
            $object->setBlock($this->denormalizer->denormalize($data['block'], 'Pezos\\Generated\\Shell\\Model\\BlockHeader', 'json', $context));
        }
        if (\array_key_exists('save_point', $data)) {
            $object->setSavePoint($data['save_point']);
        }
        if (\array_key_exists('caboose', $data)) {
            $object->setCaboose($data['caboose']);
        }
        if (\array_key_exists('history_mode', $data)) {
            $object->setHistoryMode($data['history_mode']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['block'] = $this->normalizer->normalize($object->getBlock(), 'json', $context);
        $data['save_point'] = $object->getSavePoint();
        $data['caboose'] = $object->getCaboose();
        $data['history_mode'] = $object->getHistoryMode();
        return $data;
    }
}