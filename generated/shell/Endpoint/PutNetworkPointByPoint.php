<?php

namespace Pezos\Generated\Shell\Endpoint;

class PutNetworkPointByPoint extends \Pezos\Generated\Shell\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Shell\Runtime\Client\Endpoint
{
    protected $point;
    /**
     * Connect to a peer
     *
     * @param string $point A network point (ipv4:port or [ipv6]:port).
     * @param null|\Pezos\Generated\Shell\Model\NetworkPointsPointPutBody $requestBody 
     * @param array $queryParameters {
     *     @var string $timeout A span of time in seconds
     * }
     */
    public function __construct(string $point, ?\Pezos\Generated\Shell\Model\NetworkPointsPointPutBody $requestBody = null, array $queryParameters = array())
    {
        $this->point = $point;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Pezos\Generated\Shell\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{point}'), array($this->point), '/network/points/{point}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Pezos\Generated\Shell\Model\NetworkPointsPointPutBody) {
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
        $optionsResolver->setDefined(array('timeout'));
        $optionsResolver->setRequired(array('timeout'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('timeout', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Pezos\Generated\Shell\Model\NetworkPointsPointPutResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Shell\\Model\\NetworkPointsPointPutResponse200', 'json');
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