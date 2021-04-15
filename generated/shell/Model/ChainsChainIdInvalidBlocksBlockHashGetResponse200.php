<?php

namespace Pezos\Generated\Shell\Model;

class ChainsChainIdInvalidBlocksBlockHashGetResponse200
{
    /**
     * 
     *
     * @var mixed
     */
    protected $block;
    /**
     * 
     *
     * @var int
     */
    protected $level;
    /**
     * The full list of error is available with the global RPC `GET errors`
     *
     * @var mixed
     */
    protected $errors;
    /**
     * 
     *
     * @return mixed
     */
    public function getBlock()
    {
        return $this->block;
    }
    /**
     * 
     *
     * @param mixed $block
     *
     * @return self
     */
    public function setBlock($block) : self
    {
        $this->block = $block;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }
    /**
     * 
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * The full list of error is available with the global RPC `GET errors`
     *
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * The full list of error is available with the global RPC `GET errors`
     *
     * @param mixed $errors
     *
     * @return self
     */
    public function setErrors($errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}