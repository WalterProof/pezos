<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class VersionGetResponse200
{
    /**
     * 
     *
     * @var VersionGetResponse200Version
     */
    protected $version;
    /**
     * A version number for the network protocol (includes distributed DB version and p2p version)
     *
     * @var NetworkVersion
     */
    protected $networkVersion;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $commitInfo;
    /**
     * 
     *
     * @return VersionGetResponse200Version
     */
    public function getVersion() : VersionGetResponse200Version
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param VersionGetResponse200Version $version
     *
     * @return self
     */
    public function setVersion(VersionGetResponse200Version $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * A version number for the network protocol (includes distributed DB version and p2p version)
     *
     * @return NetworkVersion
     */
    public function getNetworkVersion() : NetworkVersion
    {
        return $this->networkVersion;
    }
    /**
     * A version number for the network protocol (includes distributed DB version and p2p version)
     *
     * @param NetworkVersion $networkVersion
     *
     * @return self
     */
    public function setNetworkVersion(NetworkVersion $networkVersion) : self
    {
        $this->networkVersion = $networkVersion;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getCommitInfo()
    {
        return $this->commitInfo;
    }
    /**
     * 
     *
     * @param mixed $commitInfo
     *
     * @return self
     */
    public function setCommitInfo($commitInfo) : self
    {
        $this->commitInfo = $commitInfo;
        return $this;
    }
}