<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults
{
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $cannotDownload;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $cannotParse;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $refusedByPrefilter;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $refusedByPostfilter;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $applied;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $branchDelayed;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $branchRefused;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $refused;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $duplicate;
    /**
     * Decimal representation of a big number
     *
     * @var string
     */
    protected $outdated;
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getCannotDownload() : string
    {
        return $this->cannotDownload;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $cannotDownload
     *
     * @return self
     */
    public function setCannotDownload(string $cannotDownload) : self
    {
        $this->cannotDownload = $cannotDownload;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getCannotParse() : string
    {
        return $this->cannotParse;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $cannotParse
     *
     * @return self
     */
    public function setCannotParse(string $cannotParse) : self
    {
        $this->cannotParse = $cannotParse;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getRefusedByPrefilter() : string
    {
        return $this->refusedByPrefilter;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $refusedByPrefilter
     *
     * @return self
     */
    public function setRefusedByPrefilter(string $refusedByPrefilter) : self
    {
        $this->refusedByPrefilter = $refusedByPrefilter;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getRefusedByPostfilter() : string
    {
        return $this->refusedByPostfilter;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $refusedByPostfilter
     *
     * @return self
     */
    public function setRefusedByPostfilter(string $refusedByPostfilter) : self
    {
        $this->refusedByPostfilter = $refusedByPostfilter;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getApplied() : string
    {
        return $this->applied;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $applied
     *
     * @return self
     */
    public function setApplied(string $applied) : self
    {
        $this->applied = $applied;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getBranchDelayed() : string
    {
        return $this->branchDelayed;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $branchDelayed
     *
     * @return self
     */
    public function setBranchDelayed(string $branchDelayed) : self
    {
        $this->branchDelayed = $branchDelayed;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getBranchRefused() : string
    {
        return $this->branchRefused;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $branchRefused
     *
     * @return self
     */
    public function setBranchRefused(string $branchRefused) : self
    {
        $this->branchRefused = $branchRefused;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getRefused() : string
    {
        return $this->refused;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $refused
     *
     * @return self
     */
    public function setRefused(string $refused) : self
    {
        $this->refused = $refused;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getDuplicate() : string
    {
        return $this->duplicate;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $duplicate
     *
     * @return self
     */
    public function setDuplicate(string $duplicate) : self
    {
        $this->duplicate = $duplicate;
        return $this;
    }
    /**
     * Decimal representation of a big number
     *
     * @return string
     */
    public function getOutdated() : string
    {
        return $this->outdated;
    }
    /**
     * Decimal representation of a big number
     *
     * @param string $outdated
     *
     * @return self
     */
    public function setOutdated(string $outdated) : self
    {
        $this->outdated = $outdated;
        return $this;
    }
}