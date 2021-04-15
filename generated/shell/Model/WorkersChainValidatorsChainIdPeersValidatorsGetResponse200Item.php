<?php

namespace Pezos\Generated\Shell\Model;

class WorkersChainValidatorsChainIdPeersValidatorsGetResponse200Item
{
    /**
     * 
     *
     * @var mixed
     */
    protected $peerId;
    /**
     * 
     *
     * @var mixed
     */
    protected $status;
    /**
     * 
     *
     * @var WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemInformation
     */
    protected $information;
    /**
     * 
     *
     * @var WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines
     */
    protected $pipelines;
    /**
     * 
     *
     * @return mixed
     */
    public function getPeerId()
    {
        return $this->peerId;
    }
    /**
     * 
     *
     * @param mixed $peerId
     *
     * @return self
     */
    public function setPeerId($peerId) : self
    {
        $this->peerId = $peerId;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param mixed $status
     *
     * @return self
     */
    public function setStatus($status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemInformation
     */
    public function getInformation() : WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemInformation
    {
        return $this->information;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemInformation $information
     *
     * @return self
     */
    public function setInformation(WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemInformation $information) : self
    {
        $this->information = $information;
        return $this;
    }
    /**
     * 
     *
     * @return WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines
     */
    public function getPipelines() : WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines
    {
        return $this->pipelines;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines $pipelines
     *
     * @return self
     */
    public function setPipelines(WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines $pipelines) : self
    {
        $this->pipelines = $pipelines;
        return $this;
    }
}