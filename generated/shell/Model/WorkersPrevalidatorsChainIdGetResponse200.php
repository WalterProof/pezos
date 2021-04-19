<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersPrevalidatorsChainIdGetResponse200
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
     * @var WorkersPrevalidatorsChainIdGetResponse200PendingRequestsItem[]
     */
    protected $pendingRequests;
    /**
     * 
     *
     * @var WorkersPrevalidatorsChainIdGetResponse200BacklogItem[]
     */
    protected $backlog;
    /**
     * 
     *
     * @var WorkersPrevalidatorsChainIdGetResponse200CurrentRequest
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
     * @return WorkersPrevalidatorsChainIdGetResponse200PendingRequestsItem[]
     */
    public function getPendingRequests() : array
    {
        return $this->pendingRequests;
    }
    /**
     * 
     *
     * @param WorkersPrevalidatorsChainIdGetResponse200PendingRequestsItem[] $pendingRequests
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
     * @return WorkersPrevalidatorsChainIdGetResponse200BacklogItem[]
     */
    public function getBacklog() : array
    {
        return $this->backlog;
    }
    /**
     * 
     *
     * @param WorkersPrevalidatorsChainIdGetResponse200BacklogItem[] $backlog
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
     * @return WorkersPrevalidatorsChainIdGetResponse200CurrentRequest
     */
    public function getCurrentRequest() : WorkersPrevalidatorsChainIdGetResponse200CurrentRequest
    {
        return $this->currentRequest;
    }
    /**
     * 
     *
     * @param WorkersPrevalidatorsChainIdGetResponse200CurrentRequest $currentRequest
     *
     * @return self
     */
    public function setCurrentRequest(WorkersPrevalidatorsChainIdGetResponse200CurrentRequest $currentRequest) : self
    {
        $this->currentRequest = $currentRequest;
        return $this;
    }
}