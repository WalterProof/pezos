<?php

namespace Bzzhh\Pezos\Generated\Mempool\Endpoint;

class PostFilter extends \Bzzhh\Pezos\Generated\Mempool\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Mempool\Runtime\Client\Endpoint
{
    /**
     * Set the configuration of the mempool filter.
     *
     * @param null|mixed $requestBody 
     */
    public function __construct($requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Bzzhh\Pezos\Generated\Mempool\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/filter';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (isset($this->body)) {
            return array(array('Content-Type' => array('application/json')), json_encode($this->body));
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