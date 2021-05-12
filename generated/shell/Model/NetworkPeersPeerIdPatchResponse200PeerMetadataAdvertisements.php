<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisements
{
    /**
     * @var NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisementsSent
     */
    protected $sent;
    /**
     * @var NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisementsReceived
     */
    protected $received;

    public function getSent(): NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisementsSent
    {
        return $this->sent;
    }

    public function setSent(NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisementsSent $sent): self
    {
        $this->sent = $sent;

        return $this;
    }

    public function getReceived(): NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisementsReceived
    {
        return $this->received;
    }

    public function setReceived(NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisementsReceived $received): self
    {
        $this->received = $received;

        return $this;
    }
}