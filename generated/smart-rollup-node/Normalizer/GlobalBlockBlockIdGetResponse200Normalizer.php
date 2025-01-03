<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Rollup\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Rollup\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GlobalBlockBlockIdGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('block_hash', $data)) {
                $object->setBlockHash($data['block_hash']);
                unset($data['block_hash']);
            }
            if (\array_key_exists('level', $data)) {
                $object->setLevel($data['level']);
                unset($data['level']);
            }
            if (\array_key_exists('predecessor', $data)) {
                $object->setPredecessor($data['predecessor']);
                unset($data['predecessor']);
            }
            if (\array_key_exists('commitment_hash', $data) && $data['commitment_hash'] !== null) {
                $object->setCommitmentHash($data['commitment_hash']);
                unset($data['commitment_hash']);
            } elseif (\array_key_exists('commitment_hash', $data) && $data['commitment_hash'] === null) {
                $object->setCommitmentHash(null);
            }
            if (\array_key_exists('previous_commitment_hash', $data)) {
                $object->setPreviousCommitmentHash($data['previous_commitment_hash']);
                unset($data['previous_commitment_hash']);
            }
            if (\array_key_exists('context', $data)) {
                $object->setContext($data['context']);
                unset($data['context']);
            }
            if (\array_key_exists('inbox_witness', $data)) {
                $object->setInboxWitness($data['inbox_witness']);
                unset($data['inbox_witness']);
            }
            if (\array_key_exists('inbox_hash', $data)) {
                $object->setInboxHash($data['inbox_hash']);
                unset($data['inbox_hash']);
            }
            if (\array_key_exists('inbox', $data)) {
                $object->setInbox($this->denormalizer->denormalize($data['inbox'], \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200Inbox::class, 'json', $context));
                unset($data['inbox']);
            }
            if (\array_key_exists('messages', $data)) {
                $values = [];
                foreach ($data['messages'] as $value) {
                    $values[] = $value;
                }
                $object->setMessages($values);
                unset($data['messages']);
            }
            if (\array_key_exists('commitment', $data)) {
                $object->setCommitment($this->denormalizer->denormalize($data['commitment'], \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200Commitment::class, 'json', $context));
                unset($data['commitment']);
            }
            if (\array_key_exists('outbox', $data)) {
                $values_1 = [];
                foreach ($data['outbox'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setOutbox($values_1);
                unset($data['outbox']);
            }
            if (\array_key_exists('initial_tick', $data)) {
                $object->setInitialTick($data['initial_tick']);
                unset($data['initial_tick']);
            }
            if (\array_key_exists('num_ticks', $data)) {
                $object->setNumTicks($data['num_ticks']);
                unset($data['num_ticks']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['block_hash'] = $object->getBlockHash();
            $data['level'] = $object->getLevel();
            $data['predecessor'] = $object->getPredecessor();
            $data['commitment_hash'] = $object->getCommitmentHash();
            $data['previous_commitment_hash'] = $object->getPreviousCommitmentHash();
            $data['context'] = $object->getContext();
            $data['inbox_witness'] = $object->getInboxWitness();
            $data['inbox_hash'] = $object->getInboxHash();
            $data['inbox'] = $this->normalizer->normalize($object->getInbox(), 'json', $context);
            $values = [];
            foreach ($object->getMessages() as $value) {
                $values[] = $value;
            }
            $data['messages'] = $values;
            if ($object->isInitialized('commitment') && null !== $object->getCommitment()) {
                $data['commitment'] = $this->normalizer->normalize($object->getCommitment(), 'json', $context);
            }
            if ($object->isInitialized('outbox') && null !== $object->getOutbox()) {
                $values_1 = [];
                foreach ($object->getOutbox() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['outbox'] = $values_1;
            }
            $data['initial_tick'] = $object->getInitialTick();
            $data['num_ticks'] = $object->getNumTicks();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200::class => false];
        }
    }
} else {
    class GlobalBlockBlockIdGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('block_hash', $data)) {
                $object->setBlockHash($data['block_hash']);
                unset($data['block_hash']);
            }
            if (\array_key_exists('level', $data)) {
                $object->setLevel($data['level']);
                unset($data['level']);
            }
            if (\array_key_exists('predecessor', $data)) {
                $object->setPredecessor($data['predecessor']);
                unset($data['predecessor']);
            }
            if (\array_key_exists('commitment_hash', $data) && $data['commitment_hash'] !== null) {
                $object->setCommitmentHash($data['commitment_hash']);
                unset($data['commitment_hash']);
            } elseif (\array_key_exists('commitment_hash', $data) && $data['commitment_hash'] === null) {
                $object->setCommitmentHash(null);
            }
            if (\array_key_exists('previous_commitment_hash', $data)) {
                $object->setPreviousCommitmentHash($data['previous_commitment_hash']);
                unset($data['previous_commitment_hash']);
            }
            if (\array_key_exists('context', $data)) {
                $object->setContext($data['context']);
                unset($data['context']);
            }
            if (\array_key_exists('inbox_witness', $data)) {
                $object->setInboxWitness($data['inbox_witness']);
                unset($data['inbox_witness']);
            }
            if (\array_key_exists('inbox_hash', $data)) {
                $object->setInboxHash($data['inbox_hash']);
                unset($data['inbox_hash']);
            }
            if (\array_key_exists('inbox', $data)) {
                $object->setInbox($this->denormalizer->denormalize($data['inbox'], \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200Inbox::class, 'json', $context));
                unset($data['inbox']);
            }
            if (\array_key_exists('messages', $data)) {
                $values = [];
                foreach ($data['messages'] as $value) {
                    $values[] = $value;
                }
                $object->setMessages($values);
                unset($data['messages']);
            }
            if (\array_key_exists('commitment', $data)) {
                $object->setCommitment($this->denormalizer->denormalize($data['commitment'], \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200Commitment::class, 'json', $context));
                unset($data['commitment']);
            }
            if (\array_key_exists('outbox', $data)) {
                $values_1 = [];
                foreach ($data['outbox'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setOutbox($values_1);
                unset($data['outbox']);
            }
            if (\array_key_exists('initial_tick', $data)) {
                $object->setInitialTick($data['initial_tick']);
                unset($data['initial_tick']);
            }
            if (\array_key_exists('num_ticks', $data)) {
                $object->setNumTicks($data['num_ticks']);
                unset($data['num_ticks']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['block_hash'] = $object->getBlockHash();
            $data['level'] = $object->getLevel();
            $data['predecessor'] = $object->getPredecessor();
            $data['commitment_hash'] = $object->getCommitmentHash();
            $data['previous_commitment_hash'] = $object->getPreviousCommitmentHash();
            $data['context'] = $object->getContext();
            $data['inbox_witness'] = $object->getInboxWitness();
            $data['inbox_hash'] = $object->getInboxHash();
            $data['inbox'] = $this->normalizer->normalize($object->getInbox(), 'json', $context);
            $values = [];
            foreach ($object->getMessages() as $value) {
                $values[] = $value;
            }
            $data['messages'] = $values;
            if ($object->isInitialized('commitment') && null !== $object->getCommitment()) {
                $data['commitment'] = $this->normalizer->normalize($object->getCommitment(), 'json', $context);
            }
            if ($object->isInitialized('outbox') && null !== $object->getOutbox()) {
                $values_1 = [];
                foreach ($object->getOutbox() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['outbox'] = $values_1;
            }
            $data['initial_tick'] = $object->getInitialTick();
            $data['num_ticks'] = $object->getNumTicks();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rollup\Model\GlobalBlockBlockIdGetResponse200::class => false];
        }
    }
}
