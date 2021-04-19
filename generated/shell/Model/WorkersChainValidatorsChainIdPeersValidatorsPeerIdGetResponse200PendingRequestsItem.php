<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200PendingRequestsItem
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
     * @var mixed
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
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * 
     *
     * @param mixed $request
     *
     * @return self
     */
    public function setRequest($request) : self
    {
        $this->request = $request;
        return $this;
    }
}