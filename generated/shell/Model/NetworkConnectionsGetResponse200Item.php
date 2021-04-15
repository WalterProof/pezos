<?php

namespace Pezos\Generated\Shell\Model;

class NetworkConnectionsGetResponse200Item
{
    /**
     * 
     *
     * @var bool
     */
    protected $incoming;
    /**
     * 
     *
     * @var mixed
     */
    protected $peerId;
    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     *
     * @var P2pConnectionId
     */
    protected $idPoint;
    /**
     * 
     *
     * @var int
     */
    protected $remoteSocketPort;
    /**
     * A version number for the network protocol (includes distributed DB version and p2p version)
     *
     * @var NetworkVersion
     */
    protected $announcedVersion;
    /**
     * 
     *
     * @var bool
     */
    protected $private;
    /**
     * 
     *
     * @var NetworkConnectionsGetResponse200ItemLocalMetadata
     */
    protected $localMetadata;
    /**
     * 
     *
     * @var NetworkConnectionsGetResponse200ItemRemoteMetadata
     */
    protected $remoteMetadata;
    /**
     * 
     *
     * @return bool
     */
    public function getIncoming() : bool
    {
        return $this->incoming;
    }
    /**
     * 
     *
     * @param bool $incoming
     *
     * @return self
     */
    public function setIncoming(bool $incoming) : self
    {
        $this->incoming = $incoming;
        return $this;
    }
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
     * The identifier for a p2p connection. It includes an address and a port number.
     *
     * @return P2pConnectionId
     */
    public function getIdPoint() : P2pConnectionId
    {
        return $this->idPoint;
    }
    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     *
     * @param P2pConnectionId $idPoint
     *
     * @return self
     */
    public function setIdPoint(P2pConnectionId $idPoint) : self
    {
        $this->idPoint = $idPoint;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRemoteSocketPort() : int
    {
        return $this->remoteSocketPort;
    }
    /**
     * 
     *
     * @param int $remoteSocketPort
     *
     * @return self
     */
    public function setRemoteSocketPort(int $remoteSocketPort) : self
    {
        $this->remoteSocketPort = $remoteSocketPort;
        return $this;
    }
    /**
     * A version number for the network protocol (includes distributed DB version and p2p version)
     *
     * @return NetworkVersion
     */
    public function getAnnouncedVersion() : NetworkVersion
    {
        return $this->announcedVersion;
    }
    /**
     * A version number for the network protocol (includes distributed DB version and p2p version)
     *
     * @param NetworkVersion $announcedVersion
     *
     * @return self
     */
    public function setAnnouncedVersion(NetworkVersion $announcedVersion) : self
    {
        $this->announcedVersion = $announcedVersion;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
     * 
     *
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate(bool $private) : self
    {
        $this->private = $private;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkConnectionsGetResponse200ItemLocalMetadata
     */
    public function getLocalMetadata() : NetworkConnectionsGetResponse200ItemLocalMetadata
    {
        return $this->localMetadata;
    }
    /**
     * 
     *
     * @param NetworkConnectionsGetResponse200ItemLocalMetadata $localMetadata
     *
     * @return self
     */
    public function setLocalMetadata(NetworkConnectionsGetResponse200ItemLocalMetadata $localMetadata) : self
    {
        $this->localMetadata = $localMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkConnectionsGetResponse200ItemRemoteMetadata
     */
    public function getRemoteMetadata() : NetworkConnectionsGetResponse200ItemRemoteMetadata
    {
        return $this->remoteMetadata;
    }
    /**
     * 
     *
     * @param NetworkConnectionsGetResponse200ItemRemoteMetadata $remoteMetadata
     *
     * @return self
     */
    public function setRemoteMetadata(NetworkConnectionsGetResponse200ItemRemoteMetadata $remoteMetadata) : self
    {
        $this->remoteMetadata = $remoteMetadata;
        return $this;
    }
}