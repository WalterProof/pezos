<?php

namespace Bzzhh\Pezos\Generated\Shell\Endpoint;

class GetMonitorValidBlock extends \Bzzhh\Pezos\Generated\Shell\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Shell\Runtime\Client\Endpoint
{
    /**
     * Monitor all blocks that are successfully validated by the node, disregarding whether they were selected as the new head or not.
     *
     * @param array $queryParameters {
     *     @var string $protocol Protocol_hash (Base58Check-encoded)
     *     @var string $next_protocol Protocol_hash (Base58Check-encoded)
     *     @var string $chain A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Bzzhh\Pezos\Generated\Shell\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/monitor/valid_blocks';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('protocol', 'next_protocol', 'chain'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('protocol', array('string'));
        $optionsResolver->setAllowedTypes('next_protocol', array('string'));
        $optionsResolver->setAllowedTypes('chain', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Bzzhh\Pezos\Generated\Shell\Model\MonitorValidBlocksGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\MonitorValidBlocksGetResponse200', 'json');
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