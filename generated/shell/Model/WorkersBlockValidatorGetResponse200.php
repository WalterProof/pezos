<?php

namespace Pezos\Generated\Shell\Model;

class WorkersBlockValidatorGetResponse200
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
     * @var WorkersBlockValidatorGetResponse200PendingRequestsItem[]
     */
    protected $pendingRequests;
    /**
     * 
     *
     * @var WorkersBlockValidatorGetResponse200BacklogItem[]
     */
    protected $backlog;
    /**
     * 
     *
     * @var WorkersBlockValidatorGetResponse200CurrentRequest
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
     * @return WorkersBlockValidatorGetResponse200PendingRequestsItem[]
     */
    public function getPendingRequests() : array
    {
        return $this->pendingRequests;
    }
    /**
     * 
     *
     * @param WorkersBlockValidatorGetResponse200PendingRequestsItem[] $pendingRequests
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
     * @return WorkersBlockValidatorGetResponse200BacklogItem[]
     */
    public function getBacklog() : array
    {
        return $this->backlog;
    }
    /**
     * 
     *
     * @param WorkersBlockValidatorGetResponse200BacklogItem[] $backlog
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
     * @return WorkersBlockValidatorGetResponse200CurrentRequest
     */
    public function getCurrentRequest() : WorkersBlockValidatorGetResponse200CurrentRequest
    {
        return $this->currentRequest;
    }
    /**
     * 
     *
     * @param WorkersBlockValidatorGetResponse200CurrentRequest $currentRequest
     *
     * @return self
     */
    public function setCurrentRequest(WorkersBlockValidatorGetResponse200CurrentRequest $currentRequest) : self
    {
        $this->currentRequest = $currentRequest;
        return $this;
    }
}