<?php

namespace Pezos\Generated\Shell\Endpoint;

class GetWorkersChainValidatorsByChainIdPeersValidatorByPeerId extends \Pezos\Generated\Shell\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Shell\Runtime\Client\Endpoint
{
    protected $chain_id;
    protected $peer_id;
    /**
     * Introspect the state of a peer validator worker.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     */
    public function __construct(string $chainId, string $peerId)
    {
        $this->chain_id = $chainId;
        $this->peer_id = $peerId;
    }
    use \Pezos\Generated\Shell\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{chain_id}', '{peer_id}'), array($this->chain_id, $this->peer_id), '/workers/chain_validators/{chain_id}/peers_validators/{peer_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}