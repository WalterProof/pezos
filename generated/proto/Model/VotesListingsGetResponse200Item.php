<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class VotesListingsGetResponse200Item
{
    /**
     * 
     *
     * @var mixed
     */
    protected $pkh;
    /**
     * 
     *
     * @var int
     */
    protected $rolls;
    /**
     * 
     *
     * @return mixed
     */
    public function getPkh()
    {
        return $this->pkh;
    }
    /**
     * 
     *
     * @param mixed $pkh
     *
     * @return self
     */
    public function setPkh($pkh) : self
    {
        $this->pkh = $pkh;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRolls() : int
    {
        return $this->rolls;
    }
    /**
     * 
     *
     * @param int $rolls
     *
     * @return self
     */
    public function setRolls(int $rolls) : self
    {
        $this->rolls = $rolls;
        return $this;
    }
}