<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersForgeBlockHeaderPostResponse200
{
    /**
     * 
     *
     * @var string
     */
    protected $block;
    /**
     * 
     *
     * @return string
     */
    public function getBlock() : string
    {
        return $this->block;
    }
    /**
     * 
     *
     * @param string $block
     *
     * @return self
     */
    public function setBlock(string $block) : self
    {
        $this->block = $block;
        return $this;
    }
}