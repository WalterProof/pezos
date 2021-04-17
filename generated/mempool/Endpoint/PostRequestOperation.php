<?php

namespace Pezos\Generated\Mempool\Endpoint;

class PostRequestOperation extends \Pezos\Generated\Mempool\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Mempool\Runtime\Client\Endpoint
{
    /**
     * Request the operations of your peers.
     *
     * @param null|\Pezos\Generated\Mempool\Model\RequestOperationsPostBody $requestBody 
     */
    public function __construct(?\Pezos\Generated\Mempool\Model\RequestOperationsPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Pezos\Generated\Mempool\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/request_operations';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Pezos\Generated\Mempool\Model\RequestOperationsPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
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
     * @return null|\Pezos\Generated\Mempool\Model\RequestOperationsPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Mempool\\Model\\RequestOperationsPostResponse200', 'json');
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