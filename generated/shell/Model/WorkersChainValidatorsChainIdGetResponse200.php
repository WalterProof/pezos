<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersChainValidatorsChainIdGetResponse200
{
    /**
     * 
     *
     * @var mixed
     */
    protected $status;
    /**
     * 
     *
     * @var WorkersChainValidatorsChainIdGetResponse200PendingRequestsItem[]
     */
    protected $pendingRequests;
    /**
     * 
     *
     * @var WorkersChainValidatorsChainIdGetResponse200BacklogItem[]
     */
    protected $backlog;
    /**
     * 
     *
     * @var WorkersChainValidatorsChainIdGetResponse200CurrentRequest
     */
    protected $currentRequest;
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
     * @return WorkersChainValidatorsChainIdGetResponse200PendingRequestsItem[]
     */
    public function getPendingRequests() : array
    {
        return $this->pendingRequests;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdGetResponse200PendingRequestsItem[] $pendingRequests
     *
     * @return self
     */
    public function setPendingRequests(array $pendingRequests) : self
    {
        $this->pendingRequests = $pendingRequests;
        return $this;
    }
    /**
     * 
     *
     * @return WorkersChainValidatorsChainIdGetResponse200BacklogItem[]
     */
    public function getBacklog() : array
    {
        return $this->backlog;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdGetResponse200BacklogItem[] $backlog
     *
     * @return self
     */
    public function setBacklog(array $backlog) : self
    {
        $this->backlog = $backlog;
        return $this;
    }
    /**
     * 
     *
     * @return WorkersChainValidatorsChainIdGetResponse200CurrentRequest
     */
    public function getCurrentRequest() : WorkersChainValidatorsChainIdGetResponse200CurrentRequest
    {
        return $this->currentRequest;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdGetResponse200CurrentRequest $currentRequest
     *
     * @return self
     */
    public function setCurrentRequest(WorkersChainValidatorsChainIdGetResponse200CurrentRequest $currentRequest) : self
    {
        $this->currentRequest = $currentRequest;
        return $this;
    }
}