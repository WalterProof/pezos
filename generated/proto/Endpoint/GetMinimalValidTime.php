<?php

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetMinimalValidTime extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    /**
     * Minimal valid time for a block given a priority and an endorsing power.
     *
     * @param array $queryParameters {
     *     @var string $priority 
     *     @var string $endorsing_power 
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/minimal_valid_time';
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
        $optionsResolver->setDefined(array('priority', 'endorsing_power'));
        $optionsResolver->setRequired(array('priority', 'endorsing_power'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('priority', array('string'));
        $optionsResolver->setAllowedTypes('endorsing_power', array('string'));
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