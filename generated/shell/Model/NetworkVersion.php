<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkVersion
{
    /**
     * A name for the distributed DB protocol
     *
     * @var mixed
     */
    protected $chainName;
    /**
     * A version number for the distributed DB protocol
     *
     * @var int
     */
    protected $distributedDbVersion;
    /**
     * A version number for the p2p layer.
     *
     * @var int
     */
    protected $p2pVersion;
    /**
     * A name for the distributed DB protocol
     *
     * @return mixed
     */
    public function getChainName()
    {
        return $this->chainName;
    }
    /**
     * A name for the distributed DB protocol
     *
     * @param mixed $chainName
     *
     * @return self
     */
    public function setChainName($chainName) : self
    {
        $this->chainName = $chainName;
        return $this;
    }
    /**
     * A version number for the distributed DB protocol
     *
     * @return int
     */
    public function getDistributedDbVersion() : int
    {
        return $this->distributedDbVersion;
    }
    /**
     * A version number for the distributed DB protocol
     *
     * @param int $distributedDbVersion
     *
     * @return self
     */
    public function setDistributedDbVersion(int $distributedDbVersion) : self
    {
        $this->distributedDbVersion = $distributedDbVersion;
        return $this;
    }
    /**
     * A version number for the p2p layer.
     *
     * @return int
     */
    public function getP2pVersion() : int
    {
        return $this->p2pVersion;
    }
    /**
     * A version number for the p2p layer.
     *
     * @param int $p2pVersion
     *
     * @return self
     */
    public function setP2pVersion(int $p2pVersion) : self
    {
        $this->p2pVersion = $p2pVersion;
        return $this;
    }
}