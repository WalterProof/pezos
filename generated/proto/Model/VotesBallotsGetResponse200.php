<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class VotesBallotsGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $yay;
    /**
     * 
     *
     * @var int
     */
    protected $nay;
    /**
     * 
     *
     * @var int
     */
    protected $pass;
    /**
     * 
     *
     * @return int
     */
    public function getYay() : int
    {
        return $this->yay;
    }
    /**
     * 
     *
     * @param int $yay
     *
     * @return self
     */
    public function setYay(int $yay) : self
    {
        $this->yay = $yay;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNay() : int
    {
        return $this->nay;
    }
    /**
     * 
     *
     * @param int $nay
     *
     * @return self
     */
    public function setNay(int $nay) : self
    {
        $this->nay = $nay;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPass() : int
    {
        return $this->pass;
    }
    /**
     * 
     *
     * @param int $pass
     *
     * @return self
     */
    public function setPass(int $pass) : self
    {
        $this->pass = $pass;
        return $this;
    }
}