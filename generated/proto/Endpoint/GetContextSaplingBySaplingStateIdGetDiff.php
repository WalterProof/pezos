<?php

namespace Pezos\Generated\Proto\Endpoint;

class GetContextSaplingBySaplingStateIdGetDiff extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    protected $sapling_state_id;
    /**
     * Returns the root and a diff of a state starting from an optional offset which is zero by default.
     *
     * @param string $saplingStateId A sapling state identifier
     * @param array $queryParameters {
     *     @var string $offset_commitment Commitments and ciphertexts are returned from the specified offset up to the most recent.
     *     @var string $offset_nullifier Nullifiers are returned from the specified offset up to the most recent.
     * }
     */
    public function __construct(string $saplingStateId, array $queryParameters = array())
    {
        $this->sapling_state_id = $saplingStateId;
        $this->queryParameters = $queryParameters;
    }
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{sapling_state_id}'), array($this->sapling_state_id), '/context/sapling/{sapling_state_id}/get_diff');
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
        $optionsResolver->setDefined(array('offset_commitment', 'offset_nullifier'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('offset_commitment', array('string'));
        $optionsResolver->setAllowedTypes('offset_nullifier', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Pezos\Generated\Proto\Model\ContextSaplingSaplingStateIdGetDiffGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Proto\\Model\\ContextSaplingSaplingStateIdGetDiffGetResponse200', 'json');
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