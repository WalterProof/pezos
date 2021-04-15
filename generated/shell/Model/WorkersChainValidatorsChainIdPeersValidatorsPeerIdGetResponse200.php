<?php

namespace Pezos\Generated\Shell\Model;

class WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200
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
     * @var WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200PendingRequestsItem[]
     */
    protected $pendingRequests;
    /**
     * 
     *
     * @var WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200BacklogItem[]
     */
    protected $backlog;
    /**
     * 
     *
     * @var WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200CurrentRequest
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
     * @return WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200PendingRequestsItem[]
     */
    public function getPendingRequests() : array
    {
        return $this->pendingRequests;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200PendingRequestsItem[] $pendingRequests
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
     * @return WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200BacklogItem[]
     */
    public function getBacklog() : array
    {
        return $this->backlog;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200BacklogItem[] $backlog
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
     * @return WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200CurrentRequest
     */
    public function getCurrentRequest() : WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200CurrentRequest
    {
        return $this->currentRequest;
    }
    /**
     * 
     *
     * @param WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200CurrentRequest $currentRequest
     *
     * @return self
     */
    public function setCurrentRequest(WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200CurrentRequest $currentRequest) : self
    {
        $this->currentRequest = $currentRequest;
        return $this;
    }
}