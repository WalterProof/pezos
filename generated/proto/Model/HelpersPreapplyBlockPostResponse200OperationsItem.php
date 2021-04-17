<?php

namespace Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostResponse200OperationsItem
{
    /**
     * 
     *
     * @var HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem[]
     */
    protected $applied;
    /**
     * 
     *
     * @var HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem[]
     */
    protected $refused;
    /**
     * 
     *
     * @var HelpersPreapplyBlockPostResponse200OperationsItemBranchRefusedItem[]
     */
    protected $branchRefused;
    /**
     * 
     *
     * @var HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem[]
     */
    protected $branchDelayed;
    /**
     * 
     *
     * @return HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem[]
     */
    public function getApplied() : array
    {
        return $this->applied;
    }
    /**
     * 
     *
     * @param HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem[] $applied
     *
     * @return self
     */
    public function setApplied(array $applied) : self
    {
        $this->applied = $applied;
        return $this;
    }
    /**
     * 
     *
     * @return HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem[]
     */
    public function getRefused() : array
    {
        return $this->refused;
    }
    /**
     * 
     *
     * @param HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem[] $refused
     *
     * @return self
     */
    public function setRefused(array $refused) : self
    {
        $this->refused = $refused;
        return $this;
    }
    /**
     * 
     *
     * @return HelpersPreapplyBlockPostResponse200OperationsItemBranchRefusedItem[]
     */
    public function getBranchRefused() : array
    {
        return $this->branchRefused;
    }
    /**
     * 
     *
     * @param HelpersPreapplyBlockPostResponse200OperationsItemBranchRefusedItem[] $branchRefused
     *
     * @return self
     */
    public function setBranchRefused(array $branchRefused) : self
    {
        $this->branchRefused = $branchRefused;
        return $this;
    }
    /**
     * 
     *
     * @return HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem[]
     */
    public function getBranchDelayed() : array
    {
        return $this->branchDelayed;
    }
    /**
     * 
     *
     * @param HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem[] $branchDelayed
     *
     * @return self
     */
    public function setBranchDelayed(array $branchDelayed) : self
    {
        $this->branchDelayed = $branchDelayed;
        return $this;
    }
}