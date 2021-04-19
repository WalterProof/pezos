<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ChainsChainIdCheckpointGetResponse200
{
    /**
     * Block header. It contains both shell and protocol specific data.
     *
     * @var BlockHeader
     */
    protected $block;
    /**
     * 
     *
     * @var int
     */
    protected $savePoint;
    /**
     * 
     *
     * @var int
     */
    protected $caboose;
    /**
     * 
     *
     * @var string
     */
    protected $historyMode;
    /**
     * Block header. It contains both shell and protocol specific data.
     *
     * @return BlockHeader
     */
    public function getBlock() : BlockHeader
    {
        return $this->block;
    }
    /**
     * Block header. It contains both shell and protocol specific data.
     *
     * @param BlockHeader $block
     *
     * @return self
     */
    public function setBlock(BlockHeader $block) : self
    {
        $this->block = $block;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSavePoint() : int
    {
        return $this->savePoint;
    }
    /**
     * 
     *
     * @param int $savePoint
     *
     * @return self
     */
    public function setSavePoint(int $savePoint) : self
    {
        $this->savePoint = $savePoint;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCaboose() : int
    {
        return $this->caboose;
    }
    /**
     * 
     *
     * @param int $caboose
     *
     * @return self
     */
    public function setCaboose(int $caboose) : self
    {
        $this->caboose = $caboose;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHistoryMode() : string
    {
        return $this->historyMode;
    }
    /**
     * 
     *
     * @param string $historyMode
     *
     * @return self
     */
    public function setHistoryMode(string $historyMode) : self
    {
        $this->historyMode = $historyMode;
        return $this;
    }
}