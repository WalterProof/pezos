<?php

namespace Pezos\Generated\Shell\Model;

class ConfigGetResponse200P2p
{
    /**
     * Floating point number between 0 and 256 that represents a difficulty, 24 signifies for example that at least 24 leading zeroes are expected in the hash.
     *
     * @var int
     */
    protected $expectedProofOfWork;
    /**
     * List of hosts. Tezos can connect to both IPv6 and IPv4 hosts. If the port is not specified, default port 9732 will be assumed.
     *
     * @var mixed[]
     */
    protected $bootstrapPeers;
    /**
     * Host to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @var mixed
     */
    protected $listenAddr;
    /**
     * Host for local peer discovery. If the port is not specified, the default port 10732 will be assumed.
     *
     * @var mixed|null
     */
    protected $discoveryAddr;
    /**
     * Specify if the node is in private mode or not. A node in private mode rejects incoming connections from untrusted peers and only opens outgoing connections to peers listed in 'bootstrap-peers' or provided with '--peer' option. Moreover, these peers will keep the identity and the address of the private node secret.
     *
     * @var bool
     */
    protected $privateMode;
    /**
     * Network limits
     *
     * @var ConfigGetResponse200P2pLimits
     */
    protected $limits;
    /**
     * If set to [true], the node will not participate in the propagation of pending operations (mempool). Default value is [false]. It can be used to decrease the memory and computation footprints of the node.
     *
     * @var bool
     */
    protected $disableMempool;
    /**
     * If set to [true], the node will spawn a testchain during the protocol's testing voting period. Default value is [false]. It is disabled to decrease the node storage usage and computation by dropping the validation of the test network blocks.
     *
     * @var bool
     */
    protected $enableTestchain;
    /**
     * The reconnection policy regulates the frequency with which the node tries to reconnect to an old known peer.
     *
     * @var ConfigGetResponse200P2pGreylistingConfig
     */
    protected $greylistingConfig;
    /**
     * Floating point number between 0 and 256 that represents a difficulty, 24 signifies for example that at least 24 leading zeroes are expected in the hash.
     *
     * @return int
     */
    public function getExpectedProofOfWork() : int
    {
        return $this->expectedProofOfWork;
    }
    /**
     * Floating point number between 0 and 256 that represents a difficulty, 24 signifies for example that at least 24 leading zeroes are expected in the hash.
     *
     * @param int $expectedProofOfWork
     *
     * @return self
     */
    public function setExpectedProofOfWork(int $expectedProofOfWork) : self
    {
        $this->expectedProofOfWork = $expectedProofOfWork;
        return $this;
    }
    /**
     * List of hosts. Tezos can connect to both IPv6 and IPv4 hosts. If the port is not specified, default port 9732 will be assumed.
     *
     * @return mixed[]
     */
    public function getBootstrapPeers() : array
    {
        return $this->bootstrapPeers;
    }
    /**
     * List of hosts. Tezos can connect to both IPv6 and IPv4 hosts. If the port is not specified, default port 9732 will be assumed.
     *
     * @param mixed[] $bootstrapPeers
     *
     * @return self
     */
    public function setBootstrapPeers(array $bootstrapPeers) : self
    {
        $this->bootstrapPeers = $bootstrapPeers;
        return $this;
    }
    /**
     * Host to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @return mixed
     */
    public function getListenAddr()
    {
        return $this->listenAddr;
    }
    /**
     * Host to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @param mixed $listenAddr
     *
     * @return self
     */
    public function setListenAddr($listenAddr) : self
    {
        $this->listenAddr = $listenAddr;
        return $this;
    }
    /**
     * Host for local peer discovery. If the port is not specified, the default port 10732 will be assumed.
     *
     * @return mixed
     */
    public function getDiscoveryAddr()
    {
        return $this->discoveryAddr;
    }
    /**
     * Host for local peer discovery. If the port is not specified, the default port 10732 will be assumed.
     *
     * @param mixed $discoveryAddr
     *
     * @return self
     */
    public function setDiscoveryAddr($discoveryAddr) : self
    {
        $this->discoveryAddr = $discoveryAddr;
        return $this;
    }
    /**
     * Specify if the node is in private mode or not. A node in private mode rejects incoming connections from untrusted peers and only opens outgoing connections to peers listed in 'bootstrap-peers' or provided with '--peer' option. Moreover, these peers will keep the identity and the address of the private node secret.
     *
     * @return bool
     */
    public function getPrivateMode() : bool
    {
        return $this->privateMode;
    }
    /**
     * Specify if the node is in private mode or not. A node in private mode rejects incoming connections from untrusted peers and only opens outgoing connections to peers listed in 'bootstrap-peers' or provided with '--peer' option. Moreover, these peers will keep the identity and the address of the private node secret.
     *
     * @param bool $privateMode
     *
     * @return self
     */
    public function setPrivateMode(bool $privateMode) : self
    {
        $this->privateMode = $privateMode;
        return $this;
    }
    /**
     * Network limits
     *
     * @return ConfigGetResponse200P2pLimits
     */
    public function getLimits() : ConfigGetResponse200P2pLimits
    {
        return $this->limits;
    }
    /**
     * Network limits
     *
     * @param ConfigGetResponse200P2pLimits $limits
     *
     * @return self
     */
    public function setLimits(ConfigGetResponse200P2pLimits $limits) : self
    {
        $this->limits = $limits;
        return $this;
    }
    /**
     * If set to [true], the node will not participate in the propagation of pending operations (mempool). Default value is [false]. It can be used to decrease the memory and computation footprints of the node.
     *
     * @return bool
     */
    public function getDisableMempool() : bool
    {
        return $this->disableMempool;
    }
    /**
     * If set to [true], the node will not participate in the propagation of pending operations (mempool). Default value is [false]. It can be used to decrease the memory and computation footprints of the node.
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
     * If set to [true], the node will spawn a testchain during the protocol's testing voting period. Default value is [false]. It is disabled to decrease the node storage usage and computation by dropping the validation of the test network blocks.
     *
     * @return bool
     */
    public function getEnableTestchain() : bool
    {
        return $this->enableTestchain;
    }
    /**
     * If set to [true], the node will spawn a testchain during the protocol's testing voting period. Default value is [false]. It is disabled to decrease the node storage usage and computation by dropping the validation of the test network blocks.
     *
     * @param bool $enableTestchain
     *
     * @return self
     */
    public function setEnableTestchain(bool $enableTestchain) : self
    {
        $this->enableTestchain = $enableTestchain;
        return $this;
    }
    /**
     * The reconnection policy regulates the frequency with which the node tries to reconnect to an old known peer.
     *
     * @return ConfigGetResponse200P2pGreylistingConfig
     */
    public function getGreylistingConfig() : ConfigGetResponse200P2pGreylistingConfig
    {
        return $this->greylistingConfig;
    }
    /**
     * The reconnection policy regulates the frequency with which the node tries to reconnect to an old known peer.
     *
     * @param ConfigGetResponse200P2pGreylistingConfig $greylistingConfig
     *
     * @return self
     */
    public function setGreylistingConfig(ConfigGetResponse200P2pGreylistingConfig $greylistingConfig) : self
    {
        $this->greylistingConfig = $greylistingConfig;
        return $this;
    }
}