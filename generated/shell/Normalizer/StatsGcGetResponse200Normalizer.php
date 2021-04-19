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
class StatsGcGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\StatsGcGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\StatsGcGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\StatsGcGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('minor_words', $data)) {
            $object->setMinorWords($data['minor_words']);
        }
        if (\array_key_exists('promoted_words', $data)) {
            $object->setPromotedWords($data['promoted_words']);
        }
        if (\array_key_exists('major_words', $data)) {
            $object->setMajorWords($data['major_words']);
        }
        if (\array_key_exists('minor_collections', $data)) {
            $object->setMinorCollections($data['minor_collections']);
        }
        if (\array_key_exists('major_collections', $data)) {
            $object->setMajorCollections($data['major_collections']);
        }
        if (\array_key_exists('heap_words', $data)) {
            $object->setHeapWords($data['heap_words']);
        }
        if (\array_key_exists('heap_chunks', $data)) {
            $object->setHeapChunks($data['heap_chunks']);
        }
        if (\array_key_exists('live_words', $data)) {
            $object->setLiveWords($data['live_words']);
        }
        if (\array_key_exists('live_blocks', $data)) {
            $object->setLiveBlocks($data['live_blocks']);
        }
        if (\array_key_exists('free_words', $data)) {
            $object->setFreeWords($data['free_words']);
        }
        if (\array_key_exists('free_blocks', $data)) {
            $object->setFreeBlocks($data['free_blocks']);
        }
        if (\array_key_exists('largest_free', $data)) {
            $object->setLargestFree($data['largest_free']);
        }
        if (\array_key_exists('fragments', $data)) {
            $object->setFragments($data['fragments']);
        }
        if (\array_key_exists('compactions', $data)) {
            $object->setCompactions($data['compactions']);
        }
        if (\array_key_exists('top_heap_words', $data)) {
            $object->setTopHeapWords($data['top_heap_words']);
        }
        if (\array_key_exists('stack_size', $data)) {
            $object->setStackSize($data['stack_size']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['minor_words'] = $object->getMinorWords();
        $data['promoted_words'] = $object->getPromotedWords();
        $data['major_words'] = $object->getMajorWords();
        $data['minor_collections'] = $object->getMinorCollections();
        $data['major_collections'] = $object->getMajorCollections();
        $data['heap_words'] = $object->getHeapWords();
        $data['heap_chunks'] = $object->getHeapChunks();
        $data['live_words'] = $object->getLiveWords();
        $data['live_blocks'] = $object->getLiveBlocks();
        $data['free_words'] = $object->getFreeWords();
        $data['free_blocks'] = $object->getFreeBlocks();
        $data['largest_free'] = $object->getLargestFree();
        $data['fragments'] = $object->getFragments();
        $data['compactions'] = $object->getCompactions();
        $data['top_heap_words'] = $object->getTopHeapWords();
        $data['stack_size'] = $object->getStackSize();
        return $data;
    }
}