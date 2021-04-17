<?php

namespace Pezos\Generated\Proto\Endpoint;

class PostContextBigMapsByBigMapIdByScriptExprNormalized extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    protected $big_map_id;
    protected $script_expr;
    /**
     * Access the value associated with a key in a big map, normalize the output using the requested unparsing mode.
     *
     * @param string $bigMapId A big map identifier
     * @param string $scriptExpr script_expr (Base58Check-encoded)
     * @param null|\Pezos\Generated\Proto\Model\ContextBigMapsBigMapIdScriptExprNormalizedPostBody $requestBody 
     */
    public function __construct(string $bigMapId, string $scriptExpr, ?\Pezos\Generated\Proto\Model\ContextBigMapsBigMapIdScriptExprNormalizedPostBody $requestBody = null)
    {
        $this->big_map_id = $bigMapId;
        $this->script_expr = $scriptExpr;
        $this->body = $requestBody;
    }
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{big_map_id}', '{script_expr}'), array($this->big_map_id, $this->script_expr), '/context/big_maps/{big_map_id}/{script_expr}/normalized');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Pezos\Generated\Proto\Model\ContextBigMapsBigMapIdScriptExprNormalizedPostBody) {
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