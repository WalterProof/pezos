<?php

namespace Pezos\Generated\Mempool\Normalizer;

use Pezos\Generated\Mempool\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Pezos\\Generated\\Mempool\\Model\\_008PtEdo2ZkBlockHeaderAlphaFullHeader' => 'Pezos\\Generated\\Mempool\\Normalizer\\_008PtEdo2ZkBlockHeaderAlphaFullHeaderNormalizer', 'Pezos\\Generated\\Mempool\\Model\\_008PtEdo2ZkInlinedEndorsement' => 'Pezos\\Generated\\Mempool\\Normalizer\\_008PtEdo2ZkInlinedEndorsementNormalizer', 'Pezos\\Generated\\Mempool\\Model\\_008PtEdo2ZkInlinedEndorsementContents' => 'Pezos\\Generated\\Mempool\\Normalizer\\_008PtEdo2ZkInlinedEndorsementContentsNormalizer', 'Pezos\\Generated\\Mempool\\Model\\_008PtEdo2ZkScriptedContracts' => 'Pezos\\Generated\\Mempool\\Normalizer\\_008PtEdo2ZkScriptedContractsNormalizer', 'Pezos\\Generated\\Mempool\\Model\\NextOperation' => 'Pezos\\Generated\\Mempool\\Normalizer\\NextOperationNormalizer', 'Pezos\\Generated\\Mempool\\Model\\PendingOperationsGetResponse200' => 'Pezos\\Generated\\Mempool\\Normalizer\\PendingOperationsGetResponse200Normalizer', 'Pezos\\Generated\\Mempool\\Model\\PendingOperationsGetResponse200AppliedItem' => 'Pezos\\Generated\\Mempool\\Normalizer\\PendingOperationsGetResponse200AppliedItemNormalizer', 'Pezos\\Generated\\Mempool\\Model\\RequestOperationsPostBody' => 'Pezos\\Generated\\Mempool\\Normalizer\\RequestOperationsPostBodyNormalizer', 'Pezos\\Generated\\Mempool\\Model\\RequestOperationsPostResponse200' => 'Pezos\\Generated\\Mempool\\Normalizer\\RequestOperationsPostResponse200Normalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Pezos\\Generated\\Mempool\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}