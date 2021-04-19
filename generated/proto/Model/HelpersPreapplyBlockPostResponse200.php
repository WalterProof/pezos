<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostResponse200
{
    /**
     * Block header's shell-related content. It contains information such as the block level, its predecessor and timestamp.
     *
     * @var BlockHeaderShell
     */
    protected $shellHeader;
    /**
     * 
     *
     * @var HelpersPreapplyBlockPostResponse200OperationsItem[]
     */
    protected $operations;
    /**
     * Block header's shell-related content. It contains information such as the block level, its predecessor and timestamp.
     *
     * @return BlockHeaderShell
     */
    public function getShellHeader() : BlockHeaderShell
    {
        return $this->shellHeader;
    }
    /**
     * Block header's shell-related content. It contains information such as the block level, its predecessor and timestamp.
     *
     * @param BlockHeaderShell $shellHeader
     *
     * @return self
     */
    public function setShellHeader(BlockHeaderShell $shellHeader) : self
    {
        $this->shellHeader = $shellHeader;
        return $this;
    }
    /**
     * 
     *
     * @return HelpersPreapplyBlockPostResponse200OperationsItem[]
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param HelpersPreapplyBlockPostResponse200OperationsItem[] $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
}