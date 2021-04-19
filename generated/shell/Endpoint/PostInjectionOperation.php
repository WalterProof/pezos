<?php

namespace Bzzhh\Pezos\Generated\Shell\Endpoint;

class PostInjectionOperation extends \Bzzhh\Pezos\Generated\Shell\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Shell\Runtime\Client\Endpoint
{
    /**
     * Inject an operation in node and broadcast it. Returns the ID of the operation. The `signedOperationContents` should be constructed using a contextual RPCs from the latest block and signed by the client. By default, the RPC will wait for the operation to be (pre-)validated before answering. See RPCs under /blocks/prevalidation for more details on the prevalidation context. If ?async is true, the function returns immediately. Otherwise, the operation will be validated before the result is returned. An optional ?chain parameter can be used to specify whether to inject on the test chain or the main chain.
     *
     * @param null|string $requestBody 
     * @param array $queryParameters {
     *     @var string $async 
     *     @var string $chain A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     * }
     */
    public function __construct(?string $requestBody = null, array $queryParameters = array())
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Bzzhh\Pezos\Generated\Shell\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/injection/operation';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_string($this->body)) {
            return array(array('Content-Type' => array('application/json')), json_encode($this->body));
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
        $optionsResolver->setDefined(array('async', 'chain'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('async', array('string'));
        $optionsResolver->setAllowedTypes('chain', array('string'));
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