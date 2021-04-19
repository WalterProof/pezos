<?php

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetContextBigMapByBigMapIdByScriptExpr extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    protected $big_map_id;
    protected $script_expr;
    /**
     * Access the value associated with a key in a big map.
     *
     * @param string $bigMapId A big map identifier
     * @param string $scriptExpr script_expr (Base58Check-encoded)
     */
    public function __construct(string $bigMapId, string $scriptExpr)
    {
        $this->big_map_id = $bigMapId;
        $this->script_expr = $scriptExpr;
    }
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{big_map_id}', '{script_expr}'), array($this->big_map_id, $this->script_expr), '/context/big_maps/{big_map_id}/{script_expr}');
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