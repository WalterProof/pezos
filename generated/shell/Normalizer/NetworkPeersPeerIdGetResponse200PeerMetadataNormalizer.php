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
class NetworkPeersPeerIdGetResponse200PeerMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadata';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadata';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\NetworkPeersPeerIdGetResponse200PeerMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('responses', $data)) {
            $object->setResponses($this->denormalizer->denormalize($data['responses'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataResponses', 'json', $context));
        }
        if (\array_key_exists('requests', $data)) {
            $object->setRequests($this->denormalizer->denormalize($data['requests'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataRequests', 'json', $context));
        }
        if (\array_key_exists('valid_blocks', $data)) {
            $object->setValidBlocks($data['valid_blocks']);
        }
        if (\array_key_exists('old_heads', $data)) {
            $object->setOldHeads($data['old_heads']);
        }
        if (\array_key_exists('prevalidator_results', $data)) {
            $object->setPrevalidatorResults($this->denormalizer->denormalize($data['prevalidator_results'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults', 'json', $context));
        }
        if (\array_key_exists('unactivated_chains', $data)) {
            $object->setUnactivatedChains($data['unactivated_chains']);
        }
        if (\array_key_exists('inactive_chains', $data)) {
            $object->setInactiveChains($data['inactive_chains']);
        }
        if (\array_key_exists('future_blocks_advertised', $data)) {
            $object->setFutureBlocksAdvertised($data['future_blocks_advertised']);
        }
        if (\array_key_exists('unadvertised', $data)) {
            $object->setUnadvertised($this->denormalizer->denormalize($data['unadvertised'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertised', 'json', $context));
        }
        if (\array_key_exists('advertisements', $data)) {
            $object->setAdvertisements($this->denormalizer->denormalize($data['advertisements'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['responses'] = $this->normalizer->normalize($object->getResponses(), 'json', $context);
        $data['requests'] = $this->normalizer->normalize($object->getRequests(), 'json', $context);
        $data['valid_blocks'] = $object->getValidBlocks();
        $data['old_heads'] = $object->getOldHeads();
        $data['prevalidator_results'] = $this->normalizer->normalize($object->getPrevalidatorResults(), 'json', $context);
        $data['unactivated_chains'] = $object->getUnactivatedChains();
        $data['inactive_chains'] = $object->getInactiveChains();
        $data['future_blocks_advertised'] = $object->getFutureBlocksAdvertised();
        $data['unadvertised'] = $this->normalizer->normalize($object->getUnadvertised(), 'json', $context);
        $data['advertisements'] = $this->normalizer->normalize($object->getAdvertisements(), 'json', $context);
        return $data;
    }
}