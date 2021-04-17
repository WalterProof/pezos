<?php

namespace Pezos\Generated\Proto\Endpoint;

class PostHelpersScriptsTraceCodeNormalized extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    /**
     * Run a piece of code in the current context, keeping a trace, normalize the output using the requested unparsing mode.
     *
     * @param null|\Pezos\Generated\Proto\Model\HelpersScriptsTraceCodeNormalizedPostBody $requestBody 
     */
    public function __construct(?\Pezos\Generated\Proto\Model\HelpersScriptsTraceCodeNormalizedPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/helpers/scripts/trace_code/normalized';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Pezos\Generated\Proto\Model\HelpersScriptsTraceCodeNormalizedPostBody) {
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
     * @return null|\Pezos\Generated\Proto\Model\HelpersScriptsTraceCodeNormalizedPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Proto\\Model\\HelpersScriptsTraceCodeNormalizedPostResponse200', 'json');
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