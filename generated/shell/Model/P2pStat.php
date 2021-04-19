<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class P2pStat
{
    /**
     * Decimal representation of 64 bit integers
     *
     * @var string
     */
    protected $totalSent;
    /**
     * Decimal representation of 64 bit integers
     *
     * @var string
     */
    protected $totalRecv;
    /**
     * 
     *
     * @var int
     */
    protected $currentInflow;
    /**
     * 
     *
     * @var int
     */
    protected $currentOutflow;
    /**
     * Decimal representation of 64 bit integers
     *
     * @return string
     */
    public function getTotalSent() : string
    {
        return $this->totalSent;
    }
    /**
     * Decimal representation of 64 bit integers
     *
     * @param string $totalSent
     *
     * @return self
     */
    public function setTotalSent(string $totalSent) : self
    {
        $this->totalSent = $totalSent;
        return $this;
    }
    /**
     * Decimal representation of 64 bit integers
     *
     * @return string
     */
    public function getTotalRecv() : string
    {
        return $this->totalRecv;
    }
    /**
     * Decimal representation of 64 bit integers
     *
     * @param string $totalRecv
     *
     * @return self
     */
    public function setTotalRecv(string $totalRecv) : self
    {
        $this->totalRecv = $totalRecv;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCurrentInflow() : int
    {
        return $this->currentInflow;
    }
    /**
     * 
     *
     * @param int $currentInflow
     *
     * @return self
     */
    public function setCurrentInflow(int $currentInflow) : self
    {
        $this->currentInflow = $currentInflow;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCurrentOutflow() : int
    {
        return $this->currentOutflow;
    }
    /**
     * 
     *
     * @param int $currentOutflow
     *
     * @return self
     */
    public function setCurrentOutflow(int $currentOutflow) : self
    {
        $this->currentOutflow = $currentOutflow;
        return $this;
    }
}