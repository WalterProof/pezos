<?php

namespace Pezos\Generated\Proto\Model;

class ContextConstantsGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $proofOfWorkNonceSize;
    /**
     * 
     *
     * @var int
     */
    protected $nonceLength;
    /**
     * 
     *
     * @var int
     */
    protected $maxAnonOpsPerBlock;
    /**
     * 
     *
     * @var int
     */
    protected $maxOperationDataLength;
    /**
     * 
     *
     * @var int
     */
    protected $maxProposalsPerDelegate;
    /**
     * 
     *
     * @var int
     */
    protected $preservedCycles;
    /**
     * 
     *
     * @var int
     */
    protected $blocksPerCycle;
    /**
     * 
     *
     * @var int
     */
    protected $blocksPerCommitment;
    /**
     * 
     *
     * @var int
     */
    protected $blocksPerRollSnapshot;
    /**
     * 
     *
     * @var int
     */
    protected $blocksPerVotingPeriod;
    /**
     * 
     *
     * @var string[]
     */
    protected $timeBetweenBlocks;
    /**
     * 
     *
     * @var int
     */
    protected $endorsersPerBlock;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $hardGasLimitPerOperation;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $hardGasLimitPerBlock;
    /**
     * Decimal representation of 64 bit integers
     *
     * @var string
     */
    protected $proofOfWorkThreshold;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $tokensPerRoll;
    /**
     * 
     *
     * @var int
     */
    protected $michelsonMaximumTypeSize;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $seedNonceRevelationTip;
    /**
     * 
     *
     * @var int
     */
    protected $originationSize;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $blockSecurityDeposit;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $endorsementSecurityDeposit;
    /**
     * 
     *
     * @var string[]
     */
    protected $bakingRewardPerEndorsement;
    /**
     * 
     *
     * @var string[]
     */
    protected $endorsementReward;
    /**
     * Decimal representation of a positive big number
     *
     * @var string
     */
    protected $costPerByte;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $hardStorageLimitPerOperation;
    /**
     * Decimal representation of 64 bit integers
     *
     * @var string
     */
    protected $testChainDuration;
    /**
     * 
     *
     * @var int
     */
    protected $quorumMin;
    /**
     * 
     *
     * @var int
     */
    protected $quorumMax;
    /**
     * 
     *
     * @var int
     */
    protected $minProposalQuorum;
    /**
     * 
     *
     * @var int
     */
    protected $initialEndorsers;
    /**
     * Decimal representation of 64 bit integers
     *
     * @var string
     */
    protected $delayPerMissingEndorsement;
    /**
     * 
     *
     * @return int
     */
    public function getProofOfWorkNonceSize() : int
    {
        return $this->proofOfWorkNonceSize;
    }
    /**
     * 
     *
     * @param int $proofOfWorkNonceSize
     *
     * @return self
     */
    public function setProofOfWorkNonceSize(int $proofOfWorkNonceSize) : self
    {
        $this->proofOfWorkNonceSize = $proofOfWorkNonceSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNonceLength() : int
    {
        return $this->nonceLength;
    }
    /**
     * 
     *
     * @param int $nonceLength
     *
     * @return self
     */
    public function setNonceLength(int $nonceLength) : self
    {
        $this->nonceLength = $nonceLength;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxAnonOpsPerBlock() : int
    {
        return $this->maxAnonOpsPerBlock;
    }
    /**
     * 
     *
     * @param int $maxAnonOpsPerBlock
     *
     * @return self
     */
    public function setMaxAnonOpsPerBlock(int $maxAnonOpsPerBlock) : self
    {
        $this->maxAnonOpsPerBlock = $maxAnonOpsPerBlock;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxOperationDataLength() : int
    {
        return $this->maxOperationDataLength;
    }
    /**
     * 
     *
     * @param int $maxOperationDataLength
     *
     * @return self
     */
    public function setMaxOperationDataLength(int $maxOperationDataLength) : self
    {
        $this->maxOperationDataLength = $maxOperationDataLength;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxProposalsPerDelegate() : int
    {
        return $this->maxProposalsPerDelegate;
    }
    /**
     * 
     *
     * @param int $maxProposalsPerDelegate
     *
     * @return self
     */
    public function setMaxProposalsPerDelegate(int $maxProposalsPerDelegate) : self
    {
        $this->maxProposalsPerDelegate = $maxProposalsPerDelegate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPreservedCycles() : int
    {
        return $this->preservedCycles;
    }
    /**
     * 
     *
     * @param int $preservedCycles
     *
     * @return self
     */
    public function setPreservedCycles(int $preservedCycles) : self
    {
        $this->preservedCycles = $preservedCycles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlocksPerCycle() : int
    {
        return $this->blocksPerCycle;
    }
    /**
     * 
     *
     * @param int $blocksPerCycle
     *
     * @return self
     */
    public function setBlocksPerCycle(int $blocksPerCycle) : self
    {
        $this->blocksPerCycle = $blocksPerCycle;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlocksPerCommitment() : int
    {
        return $this->blocksPerCommitment;
    }
    /**
     * 
     *
     * @param int $blocksPerCommitment
     *
     * @return self
     */
    public function setBlocksPerCommitment(int $blocksPerCommitment) : self
    {
        $this->blocksPerCommitment = $blocksPerCommitment;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlocksPerRollSnapshot() : int
    {
        return $this->blocksPerRollSnapshot;
    }
    /**
     * 
     *
     * @param int $blocksPerRollSnapshot
     *
     * @return self
     */
    public function setBlocksPerRollSnapshot(int $blocksPerRollSnapshot) : self
    {
        $this->blocksPerRollSnapshot = $blocksPerRollSnapshot;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBlocksPerVotingPeriod() : int
    {
        return $this->blocksPerVotingPeriod;
    }
    /**
     * 
     *
     * @param int $blocksPerVotingPeriod
     *
     * @return self
     */
    public function setBlocksPerVotingPeriod(int $blocksPerVotingPeriod) : self
    {
        $this->blocksPerVotingPeriod = $blocksPerVotingPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTimeBetweenBlocks() : array
    {
        return $this->timeBetweenBlocks;
    }
    /**
     * 
     *
     * @param string[] $timeBetweenBlocks
     *
     * @return self
     */
    public function setTimeBetweenBlocks(array $timeBetweenBlocks) : self
    {
        $this->timeBetweenBlocks = $timeBetweenBlocks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEndorsersPerBlock() : int
    {
        return $this->endorsersPerBlock;
    }
    /**
     * 
     *
     * @param int $endorsersPerBlock
     *
     * @return self
     */
    public function setEndorsersPerBlock(int $endorsersPerBlock) : self
    {
        $this->endorsersPerBlock = $endorsersPerBlock;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getHardGasLimitPerOperation() : string
    {
        return $this->hardGasLimitPerOperation;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $hardGasLimitPerOperation
     *
     * @return self
     */
    public function setHardGasLimitPerOperation(string $hardGasLimitPerOperation) : self
    {
        $this->hardGasLimitPerOperation = $hardGasLimitPerOperation;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getHardGasLimitPerBlock() : string
    {
        return $this->hardGasLimitPerBlock;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $hardGasLimitPerBlock
     *
     * @return self
     */
    public function setHardGasLimitPerBlock(string $hardGasLimitPerBlock) : self
    {
        $this->hardGasLimitPerBlock = $hardGasLimitPerBlock;
        return $this;
    }
    /**
     * Decimal representation of 64 bit integers
     *
     * @return string
     */
    public function getProofOfWorkThreshold() : string
    {
        return $this->proofOfWorkThreshold;
    }
    /**
     * Decimal representation of 64 bit integers
     *
     * @param string $proofOfWorkThreshold
     *
     * @return self
     */
    public function setProofOfWorkThreshold(string $proofOfWorkThreshold) : self
    {
        $this->proofOfWorkThreshold = $proofOfWorkThreshold;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getTokensPerRoll() : string
    {
        return $this->tokensPerRoll;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $tokensPerRoll
     *
     * @return self
     */
    public function setTokensPerRoll(string $tokensPerRoll) : self
    {
        $this->tokensPerRoll = $tokensPerRoll;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMichelsonMaximumTypeSize() : int
    {
        return $this->michelsonMaximumTypeSize;
    }
    /**
     * 
     *
     * @param int $michelsonMaximumTypeSize
     *
     * @return self
     */
    public function setMichelsonMaximumTypeSize(int $michelsonMaximumTypeSize) : self
    {
        $this->michelsonMaximumTypeSize = $michelsonMaximumTypeSize;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getSeedNonceRevelationTip() : string
    {
        return $this->seedNonceRevelationTip;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $seedNonceRevelationTip
     *
     * @return self
     */
    public function setSeedNonceRevelationTip(string $seedNonceRevelationTip) : self
    {
        $this->seedNonceRevelationTip = $seedNonceRevelationTip;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOriginationSize() : int
    {
        return $this->originationSize;
    }
    /**
     * 
     *
     * @param int $originationSize
     *
     * @return self
     */
    public function setOriginationSize(int $originationSize) : self
    {
        $this->originationSize = $originationSize;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getBlockSecurityDeposit() : string
    {
        return $this->blockSecurityDeposit;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $blockSecurityDeposit
     *
     * @return self
     */
    public function setBlockSecurityDeposit(string $blockSecurityDeposit) : self
    {
        $this->blockSecurityDeposit = $blockSecurityDeposit;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getEndorsementSecurityDeposit() : string
    {
        return $this->endorsementSecurityDeposit;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $endorsementSecurityDeposit
     *
     * @return self
     */
    public function setEndorsementSecurityDeposit(string $endorsementSecurityDeposit) : self
    {
        $this->endorsementSecurityDeposit = $endorsementSecurityDeposit;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getBakingRewardPerEndorsement() : array
    {
        return $this->bakingRewardPerEndorsement;
    }
    /**
     * 
     *
     * @param string[] $bakingRewardPerEndorsement
     *
     * @return self
     */
    public function setBakingRewardPerEndorsement(array $bakingRewardPerEndorsement) : self
    {
        $this->bakingRewardPerEndorsement = $bakingRewardPerEndorsement;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getEndorsementReward() : array
    {
        return $this->endorsementReward;
    }
    /**
     * 
     *
     * @param string[] $endorsementReward
     *
     * @return self
     */
    public function setEndorsementReward(array $endorsementReward) : self
    {
        $this->endorsementReward = $endorsementReward;
        return $this;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @return string
     */
    public function getCostPerByte() : string
    {
        return $this->costPerByte;
    }
    /**
     * Decimal representation of a positive big number
     *
     * @param string $costPerByte
     *
     * @return self
     */
    public function setCostPerByte(string $costPerByte) : self
    {
        $this->costPerByte = $costPerByte;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getHardStorageLimitPerOperation() : string
    {
        return $this->hardStorageLimitPerOperation;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $hardStorageLimitPerOperation
     *
     * @return self
     */
    public function setHardStorageLimitPerOperation(string $hardStorageLimitPerOperation) : self
    {
        $this->hardStorageLimitPerOperation = $hardStorageLimitPerOperation;
        return $this;
    }
    /**
     * Decimal representation of 64 bit integers
     *
     * @return string
     */
    public function getTestChainDuration() : string
    {
        return $this->testChainDuration;
    }
    /**
     * Decimal representation of 64 bit integers
     *
     * @param string $testChainDuration
     *
     * @return self
     */
    public function setTestChainDuration(string $testChainDuration) : self
    {
        $this->testChainDuration = $testChainDuration;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuorumMin() : int
    {
        return $this->quorumMin;
    }
    /**
     * 
     *
     * @param int $quorumMin
     *
     * @return self
     */
    public function setQuorumMin(int $quorumMin) : self
    {
        $this->quorumMin = $quorumMin;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuorumMax() : int
    {
        return $this->quorumMax;
    }
    /**
     * 
     *
     * @param int $quorumMax
     *
     * @return self
     */
    public function setQuorumMax(int $quorumMax) : self
    {
        $this->quorumMax = $quorumMax;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinProposalQuorum() : int
    {
        return $this->minProposalQuorum;
    }
    /**
     * 
     *
     * @param int $minProposalQuorum
     *
     * @return self
     */
    public function setMinProposalQuorum(int $minProposalQuorum) : self
    {
        $this->minProposalQuorum = $minProposalQuorum;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInitialEndorsers() : int
    {
        return $this->initialEndorsers;
    }
    /**
     * 
     *
     * @param int $initialEndorsers
     *
     * @return self
     */
    public function setInitialEndorsers(int $initialEndorsers) : self
    {
        $this->initialEndorsers = $initialEndorsers;
        return $this;
    }
    /**
     * Decimal representation of 64 bit integers
     *
     * @return string
     */
    public function getDelayPerMissingEndorsement() : string
    {
        return $this->delayPerMissingEndorsement;
    }
    /**
     * Decimal representation of 64 bit integers
     *
     * @param string $delayPerMissingEndorsement
     *
     * @return self
     */
    public function setDelayPerMissingEndorsement(string $delayPerMissingEndorsement) : self
    {
        $this->delayPerMissingEndorsement = $delayPerMissingEndorsement;
        return $this;
    }
}