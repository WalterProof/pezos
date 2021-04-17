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
class HelpersCurrentLevelGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\HelpersCurrentLevelGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\HelpersCurrentLevelGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\HelpersCurrentLevelGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('level', $data)) {
            $object->setLevel($data['level']);
        }
        if (\array_key_exists('level_position', $data)) {
            $object->setLevelPosition($data['level_position']);
        }
        if (\array_key_exists('cycle', $data)) {
            $object->setCycle($data['cycle']);
        }
        if (\array_key_exists('cycle_position', $data)) {
            $object->setCyclePosition($data['cycle_position']);
        }
        if (\array_key_exists('voting_period', $data)) {
            $object->setVotingPeriod($data['voting_period']);
        }
        if (\array_key_exists('voting_period_position', $data)) {
            $object->setVotingPeriodPosition($data['voting_period_position']);
        }
        if (\array_key_exists('expected_commitment', $data)) {
            $object->setExpectedCommitment($data['expected_commitment']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['level'] = $object->getLevel();
        $data['level_position'] = $object->getLevelPosition();
        $data['cycle'] = $object->getCycle();
        $data['cycle_position'] = $object->getCyclePosition();
        $data['voting_period'] = $object->getVotingPeriod();
        $data['voting_period_position'] = $object->getVotingPeriodPosition();
        $data['expected_commitment'] = $object->getExpectedCommitment();
        return $data;
    }
}