<?php

namespace Pezos\Generated\Shell\Endpoint;

class DeleteChainsByChainIdInvalidBlockByBlockHash extends \Pezos\Generated\Shell\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Shell\Runtime\Client\Endpoint
{
    protected $chain_id;
    protected $block_hash;
    /**
     * Remove an invalid block for the tezos storage
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * @param string $blockHash block_hash (Base58Check-encoded)
     */
    public function __construct(string $chainId, string $blockHash)
    {
        $this->chain_id = $chainId;
        $this->block_hash = $blockHash;
    }
    use \Pezos\Generated\Shell\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{chain_id}', '{block_hash}'), array($this->chain_id, $this->block_hash), '/chains/{chain_id}/invalid_blocks/{block_hash}');
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
     * @return null|\Pezos\Generated\Shell\Model\ChainsChainIdInvalidBlocksBlockHashDeleteResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Shell\\Model\\ChainsChainIdInvalidBlocksBlockHashDeleteResponse200', 'json');
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