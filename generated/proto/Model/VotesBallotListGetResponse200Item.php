<?php

namespace Bzzhh\Pezos\Generated\Proto\Model;

class VotesBallotListGetResponse200Item
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
     * @var string
     */
    protected $ballot;
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
     * @return string
     */
    public function getBallot() : string
    {
        return $this->ballot;
    }
    /**
     * 
     *
     * @param string $ballot
     *
     * @return self
     */
    public function setBallot(string $ballot) : self
    {
        $this->ballot = $ballot;
        return $this;
    }
}