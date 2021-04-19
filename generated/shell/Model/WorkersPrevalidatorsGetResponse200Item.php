<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersPrevalidatorsGetResponse200Item
{
    /**
     * 
     *
     * @var mixed
     */
    protected $chainId;
    /**
     * 
     *
     * @var mixed
     */
    protected $status;
    /**
     * 
     *
     * @var WorkersPrevalidatorsGetResponse200ItemInformation
     */
    protected $information;
    /**
     * 
     *
     * @var int
     */
    protected $pipelines;
    /**
     * 
     *
     * @return mixed
     */
    public function getChainId()
    {
        return $this->chainId;
    }
    /**
     * 
     *
     * @param mixed $chainId
     *
     * @return self
     */
    public function setChainId($chainId) : self
    {
        $this->chainId = $chainId;
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
     * @return WorkersPrevalidatorsGetResponse200ItemInformation
     */
    public function getInformation() : WorkersPrevalidatorsGetResponse200ItemInformation
    {
        return $this->information;
    }
    /**
     * 
     *
     * @param WorkersPrevalidatorsGetResponse200ItemInformation $information
     *
     * @return self
     */
    public function setInformation(WorkersPrevalidatorsGetResponse200ItemInformation $information) : self
    {
        $this->information = $information;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPipelines() : int
    {
        return $this->pipelines;
    }
    /**
     * 
     *
     * @param int $pipelines
     *
     * @return self
     */
    public function setPipelines(int $pipelines) : self
    {
        $this->pipelines = $pipelines;
        return $this;
    }
}