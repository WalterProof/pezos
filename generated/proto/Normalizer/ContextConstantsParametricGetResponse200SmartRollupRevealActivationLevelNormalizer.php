<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Proto\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevel::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevel::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevel();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('raw_data', $data)) {
                $object->setRawData($this->denormalizer->denormalize($data['raw_data'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevelRawData::class, 'json', $context));
                unset($data['raw_data']);
            }
            if (\array_key_exists('metadata', $data)) {
                $object->setMetadata($data['metadata']);
                unset($data['metadata']);
            }
            if (\array_key_exists('dal_page', $data)) {
                $object->setDalPage($data['dal_page']);
                unset($data['dal_page']);
            }
            if (\array_key_exists('dal_parameters', $data)) {
                $object->setDalParameters($data['dal_parameters']);
                unset($data['dal_parameters']);
            }
            if (\array_key_exists('dal_attested_slots_validity_lag', $data)) {
                $object->setDalAttestedSlotsValidityLag($data['dal_attested_slots_validity_lag']);
                unset($data['dal_attested_slots_validity_lag']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['raw_data'] = $this->normalizer->normalize($object->getRawData(), 'json', $context);
            $data['metadata'] = $object->getMetadata();
            $data['dal_page'] = $object->getDalPage();
            $data['dal_parameters'] = $object->getDalParameters();
            $data['dal_attested_slots_validity_lag'] = $object->getDalAttestedSlotsValidityLag();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevel::class => false];
        }
    }
} else {
    class ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevel::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevel::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevel();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('raw_data', $data)) {
                $object->setRawData($this->denormalizer->denormalize($data['raw_data'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevelRawData::class, 'json', $context));
                unset($data['raw_data']);
            }
            if (\array_key_exists('metadata', $data)) {
                $object->setMetadata($data['metadata']);
                unset($data['metadata']);
            }
            if (\array_key_exists('dal_page', $data)) {
                $object->setDalPage($data['dal_page']);
                unset($data['dal_page']);
            }
            if (\array_key_exists('dal_parameters', $data)) {
                $object->setDalParameters($data['dal_parameters']);
                unset($data['dal_parameters']);
            }
            if (\array_key_exists('dal_attested_slots_validity_lag', $data)) {
                $object->setDalAttestedSlotsValidityLag($data['dal_attested_slots_validity_lag']);
                unset($data['dal_attested_slots_validity_lag']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['raw_data'] = $this->normalizer->normalize($object->getRawData(), 'json', $context);
            $data['metadata'] = $object->getMetadata();
            $data['dal_page'] = $object->getDalPage();
            $data['dal_parameters'] = $object->getDalParameters();
            $data['dal_attested_slots_validity_lag'] = $object->getDalAttestedSlotsValidityLag();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200SmartRollupRevealActivationLevel::class => false];
        }
    }
}