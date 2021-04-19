<?php

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements
{
    /**
     * 
     *
     * @var NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSent
     */
    protected $sent;
    /**
     * 
     *
     * @var NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived
     */
    protected $received;
    /**
     * 
     *
     * @return NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSent
     */
    public function getSent() : NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSent
    {
        return $this->sent;
    }
    /**
     * 
     *
     * @param NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSent $sent
     *
     * @return self
     */
    public function setSent(NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSent $sent) : self
    {
        $this->sent = $sent;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived
     */
    public function getReceived() : NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived
    {
        return $this->received;
    }
    /**
     * 
     *
     * @param NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived $received
     *
     * @return self
     */
    public function setReceived(NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived $received) : self
    {
        $this->received = $received;
        return $this;
    }
}