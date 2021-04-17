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
class ContextConstantsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\ContextConstantsGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\ContextConstantsGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\ContextConstantsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('proof_of_work_nonce_size', $data)) {
            $object->setProofOfWorkNonceSize($data['proof_of_work_nonce_size']);
        }
        if (\array_key_exists('nonce_length', $data)) {
            $object->setNonceLength($data['nonce_length']);
        }
        if (\array_key_exists('max_anon_ops_per_block', $data)) {
            $object->setMaxAnonOpsPerBlock($data['max_anon_ops_per_block']);
        }
        if (\array_key_exists('max_operation_data_length', $data)) {
            $object->setMaxOperationDataLength($data['max_operation_data_length']);
        }
        if (\array_key_exists('max_proposals_per_delegate', $data)) {
            $object->setMaxProposalsPerDelegate($data['max_proposals_per_delegate']);
        }
        if (\array_key_exists('preserved_cycles', $data)) {
            $object->setPreservedCycles($data['preserved_cycles']);
        }
        if (\array_key_exists('blocks_per_cycle', $data)) {
            $object->setBlocksPerCycle($data['blocks_per_cycle']);
        }
        if (\array_key_exists('blocks_per_commitment', $data)) {
            $object->setBlocksPerCommitment($data['blocks_per_commitment']);
        }
        if (\array_key_exists('blocks_per_roll_snapshot', $data)) {
            $object->setBlocksPerRollSnapshot($data['blocks_per_roll_snapshot']);
        }
        if (\array_key_exists('blocks_per_voting_period', $data)) {
            $object->setBlocksPerVotingPeriod($data['blocks_per_voting_period']);
        }
        if (\array_key_exists('time_between_blocks', $data)) {
            $values = array();
            foreach ($data['time_between_blocks'] as $value) {
                $values[] = $value;
            }
            $object->setTimeBetweenBlocks($values);
        }
        if (\array_key_exists('endorsers_per_block', $data)) {
            $object->setEndorsersPerBlock($data['endorsers_per_block']);
        }
        if (\array_key_exists('hard_gas_limit_per_operation', $data)) {
            $object->setHardGasLimitPerOperation($data['hard_gas_limit_per_operation']);
        }
        if (\array_key_exists('hard_gas_limit_per_block', $data)) {
            $object->setHardGasLimitPerBlock($data['hard_gas_limit_per_block']);
        }
        if (\array_key_exists('proof_of_work_threshold', $data)) {
            $object->setProofOfWorkThreshold($data['proof_of_work_threshold']);
        }
        if (\array_key_exists('tokens_per_roll', $data)) {
            $object->setTokensPerRoll($data['tokens_per_roll']);
        }
        if (\array_key_exists('michelson_maximum_type_size', $data)) {
            $object->setMichelsonMaximumTypeSize($data['michelson_maximum_type_size']);
        }
        if (\array_key_exists('seed_nonce_revelation_tip', $data)) {
            $object->setSeedNonceRevelationTip($data['seed_nonce_revelation_tip']);
        }
        if (\array_key_exists('origination_size', $data)) {
            $object->setOriginationSize($data['origination_size']);
        }
        if (\array_key_exists('block_security_deposit', $data)) {
            $object->setBlockSecurityDeposit($data['block_security_deposit']);
        }
        if (\array_key_exists('endorsement_security_deposit', $data)) {
            $object->setEndorsementSecurityDeposit($data['endorsement_security_deposit']);
        }
        if (\array_key_exists('baking_reward_per_endorsement', $data)) {
            $values_1 = array();
            foreach ($data['baking_reward_per_endorsement'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setBakingRewardPerEndorsement($values_1);
        }
        if (\array_key_exists('endorsement_reward', $data)) {
            $values_2 = array();
            foreach ($data['endorsement_reward'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setEndorsementReward($values_2);
        }
        if (\array_key_exists('cost_per_byte', $data)) {
            $object->setCostPerByte($data['cost_per_byte']);
        }
        if (\array_key_exists('hard_storage_limit_per_operation', $data)) {
            $object->setHardStorageLimitPerOperation($data['hard_storage_limit_per_operation']);
        }
        if (\array_key_exists('test_chain_duration', $data)) {
            $object->setTestChainDuration($data['test_chain_duration']);
        }
        if (\array_key_exists('quorum_min', $data)) {
            $object->setQuorumMin($data['quorum_min']);
        }
        if (\array_key_exists('quorum_max', $data)) {
            $object->setQuorumMax($data['quorum_max']);
        }
        if (\array_key_exists('min_proposal_quorum', $data)) {
            $object->setMinProposalQuorum($data['min_proposal_quorum']);
        }
        if (\array_key_exists('initial_endorsers', $data)) {
            $object->setInitialEndorsers($data['initial_endorsers']);
        }
        if (\array_key_exists('delay_per_missing_endorsement', $data)) {
            $object->setDelayPerMissingEndorsement($data['delay_per_missing_endorsement']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['proof_of_work_nonce_size'] = $object->getProofOfWorkNonceSize();
        $data['nonce_length'] = $object->getNonceLength();
        $data['max_anon_ops_per_block'] = $object->getMaxAnonOpsPerBlock();
        $data['max_operation_data_length'] = $object->getMaxOperationDataLength();
        $data['max_proposals_per_delegate'] = $object->getMaxProposalsPerDelegate();
        $data['preserved_cycles'] = $object->getPreservedCycles();
        $data['blocks_per_cycle'] = $object->getBlocksPerCycle();
        $data['blocks_per_commitment'] = $object->getBlocksPerCommitment();
        $data['blocks_per_roll_snapshot'] = $object->getBlocksPerRollSnapshot();
        $data['blocks_per_voting_period'] = $object->getBlocksPerVotingPeriod();
        $values = array();
        foreach ($object->getTimeBetweenBlocks() as $value) {
            $values[] = $value;
        }
        $data['time_between_blocks'] = $values;
        $data['endorsers_per_block'] = $object->getEndorsersPerBlock();
        $data['hard_gas_limit_per_operation'] = $object->getHardGasLimitPerOperation();
        $data['hard_gas_limit_per_block'] = $object->getHardGasLimitPerBlock();
        $data['proof_of_work_threshold'] = $object->getProofOfWorkThreshold();
        $data['tokens_per_roll'] = $object->getTokensPerRoll();
        $data['michelson_maximum_type_size'] = $object->getMichelsonMaximumTypeSize();
        $data['seed_nonce_revelation_tip'] = $object->getSeedNonceRevelationTip();
        $data['origination_size'] = $object->getOriginationSize();
        $data['block_security_deposit'] = $object->getBlockSecurityDeposit();
        $data['endorsement_security_deposit'] = $object->getEndorsementSecurityDeposit();
        $values_1 = array();
        foreach ($object->getBakingRewardPerEndorsement() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['baking_reward_per_endorsement'] = $values_1;
        $values_2 = array();
        foreach ($object->getEndorsementReward() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['endorsement_reward'] = $values_2;
        $data['cost_per_byte'] = $object->getCostPerByte();
        $data['hard_storage_limit_per_operation'] = $object->getHardStorageLimitPerOperation();
        $data['test_chain_duration'] = $object->getTestChainDuration();
        $data['quorum_min'] = $object->getQuorumMin();
        $data['quorum_max'] = $object->getQuorumMax();
        $data['min_proposal_quorum'] = $object->getMinProposalQuorum();
        $data['initial_endorsers'] = $object->getInitialEndorsers();
        $data['delay_per_missing_endorsement'] = $object->getDelayPerMissingEndorsement();
        return $data;
    }
}