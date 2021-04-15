<?php

namespace Pezos\Generated\Shell\Model;

class WorkersBlockValidatorGetResponse200PendingRequestsItem
{
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @var mixed
     */
    protected $pushed;
    /**
     * 
     *
     * @var WorkersBlockValidatorGetResponse200PendingRequestsItemRequest
     */
    protected $request;
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @return mixed
     */
    public function getPushed()
    {
        return $this->pushed;
    }
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @param mixed $pushed
     *
     * @return self
     */
    public function setPushed($pushed) : self
    {
        $this->pushed = $pushed;
        return $this;
    }
    /**
     * 
     *
     * @return WorkersBlockValidatorGetResponse200PendingRequestsItemRequest
     */
    public function getRequest() : WorkersBlockValidatorGetResponse200PendingRequestsItemRequest
    {
        return $this->request;
    }
    /**
     * 
     *
     * @param WorkersBlockValidatorGetResponse200PendingRequestsItemRequest $request
     *
     * @return self
     */
    public function setRequest(WorkersBlockValidatorGetResponse200PendingRequestsItemRequest $request) : self
    {
        $this->request = $request;
        return $this;
    }
}