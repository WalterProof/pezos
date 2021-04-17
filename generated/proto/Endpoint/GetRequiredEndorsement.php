<?php

namespace Pezos\Generated\Proto\Endpoint;

class GetRequiredEndorsement extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    /**
     * Minimum number of endorsements for a block to be valid, given a delay of the block's timestamp with respect to the minimum time to bake at the block's priority
     *
     * @param array $queryParameters {
     *     @var string $block_delay 
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/required_endorsements';
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
        $optionsResolver->setDefined(array('block_delay'));
        $optionsResolver->setRequired(array('block_delay'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('block_delay', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
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