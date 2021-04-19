<?php

namespace Bzzhh\Pezos\Generated\Mempool\Endpoint;

class GetMonitorOperations extends \Bzzhh\Pezos\Generated\Mempool\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Mempool\Runtime\Client\Endpoint
{
    /**
     * Monitor the mempool operations.
     *
     * @param array $queryParameters {
     *     @var string $applied Include applied operations (set by default)
     *     @var string $refused Include refused operations
     *     @var string $branch_refused Include branch refused operations
     *     @var string $branch_delayed Include branch delayed operations (set by default)
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Bzzhh\Pezos\Generated\Mempool\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/monitor_operations';
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
        $optionsResolver->setDefined(array('applied', 'refused', 'branch_refused', 'branch_delayed'));
        $optionsResolver->setRequired(array('applied', 'refused', 'branch_refused', 'branch_delayed'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('applied', array('string'));
        $optionsResolver->setAllowedTypes('refused', array('string'));
        $optionsResolver->setAllowedTypes('branch_refused', array('string'));
        $optionsResolver->setAllowedTypes('branch_delayed', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Bzzhh\Pezos\Generated\Mempool\Model\NextOperation[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Mempool\\Model\\NextOperation[]', 'json');
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