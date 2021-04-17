<?php

namespace Pezos\Generated\Proto\Endpoint;

class PostHelpersPreapplyBlock extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    /**
     * Simulate the validation of a block that would contain the given operations and return the resulting fitness and context hash.
     *
     * @param null|\Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $sort 
     *     @var string $timestamp A date in seconds from epoch
     * }
     */
    public function __construct(?\Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostBody $requestBody = null, array $queryParameters = array())
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/helpers/preapply/block';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('sort', 'timestamp'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('sort', array('string'));
        $optionsResolver->setAllowedTypes('timestamp', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Proto\\Model\\HelpersPreapplyBlockPostResponse200', 'json');
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