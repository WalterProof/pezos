<?php

namespace Pezos\Generated\Shell\Model;

class WorkersBlockValidatorGetResponse200CurrentRequest
{
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @var mixed
     */
    protected $pushed;
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @var mixed
     */
    protected $treated;
    /**
     * 
     *
     * @var WorkersBlockValidatorGetResponse200CurrentRequestRequest
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
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @return mixed
     */
    public function getTreated()
    {
        return $this->treated;
    }
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @param mixed $treated
     *
     * @return self
     */
    public function setTreated($treated) : self
    {
        $this->treated = $treated;
        return $this;
    }
    /**
     * 
     *
     * @return WorkersBlockValidatorGetResponse200CurrentRequestRequest
     */
    public function getRequest() : WorkersBlockValidatorGetResponse200CurrentRequestRequest
    {
        return $this->request;
    }
    /**
     * 
     *
     * @param WorkersBlockValidatorGetResponse200CurrentRequestRequest $request
     *
     * @return self
     */
    public function setRequest(WorkersBlockValidatorGetResponse200CurrentRequestRequest $request) : self
    {
        $this->request = $request;
        return $this;
    }
}