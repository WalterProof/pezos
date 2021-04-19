<?php

namespace Bzzhh\Pezos\Generated\Shell\Endpoint;

class GetWorkersChainValidatorByChainId extends \Bzzhh\Pezos\Generated\Shell\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Shell\Runtime\Client\Endpoint
{
    protected $chain_id;
    /**
     * Introspect the state of a chain validator worker.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     */
    public function __construct(string $chainId)
    {
        $this->chain_id = $chainId;
    }
    use \Bzzhh\Pezos\Generated\Shell\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{chain_id}'), array($this->chain_id), '/workers/chain_validators/{chain_id}');
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
     * @return null|\Bzzhh\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdGetResponse200', 'json');
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