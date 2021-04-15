<?php

namespace Pezos\Generated\Shell\Model;

class NetworkConnectionsGetResponse200ItemRemoteMetadata
{
    /**
     * 
     *
     * @var bool
     */
    protected $disableMempool;
    /**
     * 
     *
     * @var bool
     */
    protected $privateNode;
    /**
     * 
     *
     * @return bool
     */
    public function getDisableMempool() : bool
    {
        return $this->disableMempool;
    }
    /**
     * 
     *
     * @param bool $disableMempool
     *
     * @return self
     */
    public function setDisableMempool(bool $disableMempool) : self
    {
        $this->disableMempool = $disableMempool;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrivateNode() : bool
    {
        return $this->privateNode;
    }
    /**
     * 
     *
     * @param bool $privateNode
     *
     * @return self
     */
    public function setPrivateNode(bool $privateNode) : self
    {
        $this->privateNode = $privateNode;
        return $this;
    }
}