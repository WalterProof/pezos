<?php

namespace Pezos\Generated\Shell;

class Client extends \Pezos\Generated\Shell\Runtime\Client\Client
{
    /**
     * Forcefully set the bootstrapped flag of the node
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param null|\Pezos\Generated\Shell\Model\ChainsChainIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchChainByChainId(string $chainId, ?\Pezos\Generated\Shell\Model\ChainsChainIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\PatchChainByChainId($chainId, $requestBody), $fetch);
    }
    /**
     * Lists block hashes from '<chain>', up to the last checkpoint, sorted with decreasing fitness. Without arguments it returns the head of the chain. Optional arguments allow to return the list of predecessors of a given block or of a set of blocks.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param array $queryParameters {
     *     @var string $length The requested number of predecessors to return (per request; see next argument).
     *     @var string $head block_hash (Base58Check-encoded) An empty argument requests blocks starting with the current head. A non empty list allows to request one or more specific fragments of the chain.
     *     @var string $min_date A date in seconds from epoch When `min_date` is provided, blocks with a timestamp before `min_date` are filtered out
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getChainsByChainIdBlocks(string $chainId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetChainsByChainIdBlocks($chainId, $queryParameters), $fetch);
    }
    /**
     * The chain unique identifier.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getChainsByChainIdChainId(string $chainId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetChainsByChainIdChainId($chainId), $fetch);
    }
    /**
     * The current checkpoint for this chain.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\ChainsChainIdCheckpointGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getChainsByChainIdCheckpoint(string $chainId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetChainsByChainIdCheckpoint($chainId), $fetch);
    }
    /**
     * Lists blocks that have been declared invalid along with the errors that led to them being declared invalid.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\ChainsChainIdInvalidBlocksGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getChainsByChainIdInvalidBlocks(string $chainId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetChainsByChainIdInvalidBlocks($chainId), $fetch);
    }
    /**
     * Remove an invalid block for the tezos storage
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $blockHash block_hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\ChainsChainIdInvalidBlocksBlockHashDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteChainsByChainIdInvalidBlockByBlockHash(string $chainId, string $blockHash, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\DeleteChainsByChainIdInvalidBlockByBlockHash($chainId, $blockHash), $fetch);
    }
    /**
     * The errors that appears during the block (in)validation.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $blockHash block_hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\ChainsChainIdInvalidBlocksBlockHashGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getChainsByChainIdInvalidBlockByBlockHash(string $chainId, string $blockHash, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetChainsByChainIdInvalidBlockByBlockHash($chainId, $blockHash), $fetch);
    }
    /**
     * The bootstrap status of a chain
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\ChainsChainIdIsBootstrappedGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getChainsByChainIdIsBootstrapped(string $chainId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetChainsByChainIdIsBootstrapped($chainId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\ConfigGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getConfig(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetConfig(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\UserActivatedProtocolOverridesItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function getConfigNetworkUserActivatedProtocolOverride(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetConfigNetworkUserActivatedProtocolOverride(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\UserActivatedUpgradesItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function getConfigNetworkUserActivatedUpgrade(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetConfigNetworkUserActivatedUpgrade(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getError(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetError(), $fetch);
    }
    /**
     * Fetch a protocol from the network.
     *
     * @param string $protocolHash Protocol_hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getFetchProtocolByProtocolHash(string $protocolHash, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetFetchProtocolByProtocolHash($protocolHash), $fetch);
    }
    /**
     * Inject a block in the node and broadcast it. The `operations` embedded in `blockHeader` might be pre-validated using a contextual RPCs from the latest block (e.g. '/blocks/head/context/preapply'). Returns the ID of the block. By default, the RPC will wait for the block to be validated before answering. If ?async is true, the function returns immediately. Otherwise, the block will be validated before the result is returned. If ?force is true, it will be injected even on non strictly increasing fitness. An optional ?chain parameter can be used to specify whether to inject on the test chain or the main chain.
     *
     * @param null|\Pezos\Generated\Shell\Model\InjectionBlockPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $async 
     *     @var string $force 
     *     @var string $chain A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postInjectionBlock(?\Pezos\Generated\Shell\Model\InjectionBlockPostBody $requestBody = null, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\PostInjectionBlock($requestBody, $queryParameters), $fetch);
    }
    /**
     * Inject an operation in node and broadcast it. Returns the ID of the operation. The `signedOperationContents` should be constructed using a contextual RPCs from the latest block and signed by the client. By default, the RPC will wait for the operation to be (pre-)validated before answering. See RPCs under /blocks/prevalidation for more details on the prevalidation context. If ?async is true, the function returns immediately. Otherwise, the operation will be validated before the result is returned. An optional ?chain parameter can be used to specify whether to inject on the test chain or the main chain.
     *
     * @param null|string $requestBody 
     * @param array $queryParameters {
     *     @var string $async 
     *     @var string $chain A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postInjectionOperation(?string $requestBody = null, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\PostInjectionOperation($requestBody, $queryParameters), $fetch);
    }
    /**
     * Inject a protocol in node. Returns the ID of the protocol. If ?async is true, the function returns immediately. Otherwise, the protocol will be validated before the result is returned.
     *
     * @param null|\Pezos\Generated\Shell\Model\Protocol $requestBody 
     * @param array $queryParameters {
     *     @var string $async 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postInjectionProtocol(?\Pezos\Generated\Shell\Model\Protocol $requestBody = null, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\PostInjectionProtocol($requestBody, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getMonitorActiveChains(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetMonitorActiveChains(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\MonitorBootstrappedGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getMonitorBootstrapped(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetMonitorBootstrapped(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getMonitorCommitHash(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetMonitorCommitHash(), $fetch);
    }
    /**
     * Monitor all blocks that are successfully validated by the node and selected as the new head of the given chain.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param array $queryParameters {
     *     @var string $next_protocol Protocol_hash (Base58Check-encoded)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\MonitorHeadsChainIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getMonitorHeadByChainId(string $chainId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetMonitorHeadByChainId($chainId, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getMonitorProtocol(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetMonitorProtocol(), $fetch);
    }
    /**
     * Monitor all blocks that are successfully validated by the node, disregarding whether they were selected as the new head or not.
     *
     * @param array $queryParameters {
     *     @var string $protocol Protocol_hash (Base58Check-encoded)
     *     @var string $next_protocol Protocol_hash (Base58Check-encoded)
     *     @var string $chain A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\MonitorValidBlocksGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getMonitorValidBlock(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetMonitorValidBlock($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkConnectionsGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkConnections(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkConnections(), $fetch);
    }
    /**
     * Forced close of the current P2P connection to the given peer.
     *
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     * @param array $queryParameters {
     *     @var string $wait 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkConnectionsPeerIdDeleteResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function deleteNetworkConnectionByPeerId(string $peerId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\DeleteNetworkConnectionByPeerId($peerId, $queryParameters), $fetch);
    }
    /**
     * Details about the current P2P connection to the given peer.
     *
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkConnectionsPeerIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkConnectionByPeerId(string $peerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkConnectionByPeerId($peerId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkGreylistClearGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkGreylistClear(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkGreylistClear(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkLog(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkLog(), $fetch);
    }
    /**
     * List the peers the node ever met.
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPeers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPeers($queryParameters), $fetch);
    }
    /**
     * Details about a given peer.
     *
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPeersPeerIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPeerByPeerId(string $peerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPeerByPeerId($peerId), $fetch);
    }
    /**
     * Blacklist the given peer and remove it from the whitelist if present.
     *
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPeersPeerIdBanGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPeersByPeerIdBan(string $peerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPeersByPeerIdBan($peerId), $fetch);
    }
    /**
     * Check if a given peer is blacklisted or greylisted.
     *
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPeersByPeerIdBanned(string $peerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPeersByPeerIdBanned($peerId), $fetch);
    }
    /**
     * Monitor network events related to a given peer.
     *
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     * @param array $queryParameters {
     *     @var string $monitor 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\P2pPeerPoolEvent[]|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPeersByPeerIdLog(string $peerId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPeersByPeerIdLog($peerId, $queryParameters), $fetch);
    }
    /**
     * Whitelist a given peer permanently and remove it from the blacklist if present. The peer cannot be blocked (but its host IP still can).
     *
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPeersPeerIdTrustGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPeersByPeerIdTrust(string $peerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPeersByPeerIdTrust($peerId), $fetch);
    }
    /**
     * Remove the given peer from the blacklist.
     *
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPeersPeerIdUnbanGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPeersByPeerIdUnban(string $peerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPeersByPeerIdUnban($peerId), $fetch);
    }
    /**
     * Remove a given peer from the whitelist.
     *
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPeersPeerIdUntrustGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPeersByPeerIdUntrust(string $peerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPeersByPeerIdUntrust($peerId), $fetch);
    }
    /**
     * List the pool of known `IP:port` used for establishing P2P connections.
     *
     * @param array $queryParameters {
     *     @var string $filter 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPoints(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPoints($queryParameters), $fetch);
    }
    /**
     * Details about a given `IP:addr`.
     *
     * @param string $point A network point (ipv4:port or [ipv6]:port).
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\P2pPointInfo|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPointByPoint(string $point, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPointByPoint($point), $fetch);
    }
    /**
     * Connect to a peer
     *
     * @param string $point A network point (ipv4:port or [ipv6]:port).
     * @param null|\Pezos\Generated\Shell\Model\NetworkPointsPointPutBody $requestBody 
     * @param array $queryParameters {
     *     @var string $timeout A span of time in seconds
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPointsPointPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function putNetworkPointByPoint(string $point, ?\Pezos\Generated\Shell\Model\NetworkPointsPointPutBody $requestBody = null, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\PutNetworkPointByPoint($point, $requestBody, $queryParameters), $fetch);
    }
    /**
     * Blacklist the given address and remove it from the whitelist if present.
     *
     * @param string $point A network point (ipv4:port or [ipv6]:port).
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPointsPointBanGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPointsByPointBan(string $point, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPointsByPointBan($point), $fetch);
    }
    /**
     * Check is a given address is blacklisted or greylisted.
     *
     * @param string $point A network point (ipv4:port or [ipv6]:port).
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPointsByPointBanned(string $point, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPointsByPointBanned($point), $fetch);
    }
    /**
     * Monitor network events related to an `IP:addr`.
     *
     * @param string $point A network point (ipv4:port or [ipv6]:port).
     * @param array $queryParameters {
     *     @var string $monitor 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPointsByPointLog(string $point, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPointsByPointLog($point, $queryParameters), $fetch);
    }
    /**
     * Trust a given address permanently and remove it from the blacklist if present. Connections from this address can still be closed on authentication if the peer is greylisted.
     *
     * @param string $point A network point (ipv4:port or [ipv6]:port).
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPointsPointTrustGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPointsByPointTrust(string $point, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPointsByPointTrust($point), $fetch);
    }
    /**
     * Remove an address from the blacklist.
     *
     * @param string $point A network point (ipv4:port or [ipv6]:port).
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPointsPointUnbanGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPointsByPointUnban(string $point, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPointsByPointUnban($point), $fetch);
    }
    /**
     * Remove an address from the whitelist.
     *
     * @param string $point A network point (ipv4:port or [ipv6]:port).
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPointsPointUntrustGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkPointsByPointUntrust(string $point, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkPointsByPointUntrust($point), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkSelf(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkSelf(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\P2pStat|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkStat(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkStat(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkVersion|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkVersion(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkVersion(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkVersion[]|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworkVersions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetNetworkVersions(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProtocols(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetProtocols(), $fetch);
    }
    /**
     * (no description)
     *
     * @param string $protocolHash Protocol_hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\Protocol|\Psr\Http\Message\ResponseInterface
     */
    public function getProtocolByProtocolHash(string $protocolHash, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetProtocolByProtocolHash($protocolHash), $fetch);
    }
    /**
     * (no description)
     *
     * @param string $protocolHash Protocol_hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProtocolsByProtocolHashEnvironment(string $protocolHash, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetProtocolsByProtocolHashEnvironment($protocolHash), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\StatsGcGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getStatsGc(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetStatsGc(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getStatsMemory(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetStatsMemory(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\VersionGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getVersion(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetVersion(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\WorkersBlockValidatorGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkersBlockValidator(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetWorkersBlockValidator(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\WorkersChainValidatorsGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkersChainValidators(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetWorkersChainValidators(), $fetch);
    }
    /**
     * Introspect the state of a chain validator worker.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkersChainValidatorByChainId(string $chainId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetWorkersChainValidatorByChainId($chainId), $fetch);
    }
    /**
     * Introspect the state of the DDB attached to a chain validator worker.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkersChainValidatorsByChainIdDdb(string $chainId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetWorkersChainValidatorsByChainIdDdb($chainId), $fetch);
    }
    /**
     * Lists the peer validator workers and their status.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkersChainValidatorsByChainIdPeersValidators(string $chainId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetWorkersChainValidatorsByChainIdPeersValidators($chainId), $fetch);
    }
    /**
     * Introspect the state of a peer validator worker.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkersChainValidatorsByChainIdPeersValidatorByPeerId(string $chainId, string $peerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetWorkersChainValidatorsByChainIdPeersValidatorByPeerId($chainId, $peerId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\WorkersPrevalidatorsGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkersPrevalidators(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetWorkersPrevalidators(), $fetch);
    }
    /**
     * Introspect the state of prevalidator workers.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Shell\Model\WorkersPrevalidatorsChainIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkersPrevalidatorByChainId(string $chainId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Shell\Endpoint\GetWorkersPrevalidatorByChainId($chainId), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Pezos\Generated\Shell\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}