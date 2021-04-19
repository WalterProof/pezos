<?php

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class PostHelpersParseBlock extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    /**
     * Parse a block
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\BlockHeader $requestBody 
     */
    public function __construct(?\Bzzhh\Pezos\Generated\Proto\Model\BlockHeader $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/helpers/parse/block';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Bzzhh\Pezos\Generated\Proto\Model\BlockHeader) {
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
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\_008PtEdo2ZkBlockHeaderAlphaSignedContents
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\_008PtEdo2ZkBlockHeaderAlphaSignedContents', 'json');
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