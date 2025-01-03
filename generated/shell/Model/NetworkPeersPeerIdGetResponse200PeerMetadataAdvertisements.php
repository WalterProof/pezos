<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSent
     */
    protected $sent;
    /**
     * @var NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived
     */
    protected $received;

    public function getSent(): NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSent
    {
        return $this->sent;
    }

    public function setSent(NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSent $sent): self
    {
        $this->initialized['sent'] = true;
        $this->sent = $sent;

        return $this;
    }

    public function getReceived(): NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived
    {
        return $this->received;
    }

    public function setReceived(NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived $received): self
    {
        $this->initialized['received'] = true;
        $this->received = $received;

        return $this;
    }
}
