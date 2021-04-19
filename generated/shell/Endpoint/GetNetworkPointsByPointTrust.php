<?php

namespace Bzzhh\Pezos\Generated\Shell\Endpoint;

class GetNetworkPointsByPointTrust extends \Bzzhh\Pezos\Generated\Shell\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Shell\Runtime\Client\Endpoint
{
    protected $point;
    /**
     * Trust a given address permanently and remove it from the blacklist if present. Connections from this address can still be closed on authentication if the peer is greylisted.
     *
     * @param string $point A network point (ipv4:port or [ipv6]:port).
     */
    public function __construct(string $point)
    {
        $this->point = $point;
    }
    use \Bzzhh\Pezos\Generated\Shell\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{point}'), array($this->point), '/network/points/{point}/trust');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
     * @return null|\Bzzhh\Pezos\Generated\Shell\Model\NetworkPointsPointTrustGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPointsPointTrustGetResponse200', 'json');
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