<?php

namespace Pezos\Generated\Proto\Endpoint;

class GetContextContractsByContractIdSingleSaplingGetDiff extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    protected $contract_id;
    /**
     * Returns the root and a diff of a state starting from an optional offset which is zero by default.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param array $queryParameters {
     *     @var string $offset_commitment Commitments and ciphertexts are returned from the specified offset up to the most recent.
     *     @var string $offset_nullifier Nullifiers are returned from the specified offset up to the most recent.
     * }
     */
    public function __construct(string $contractId, array $queryParameters = array())
    {
        $this->contract_id = $contractId;
        $this->queryParameters = $queryParameters;
    }
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{contract_id}'), array($this->contract_id), '/context/contracts/{contract_id}/single_sapling_get_diff');
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
     * @return null|\Pezos\Generated\Proto\Model\ContextContractsContractIdSingleSaplingGetDiffGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdSingleSaplingGetDiffGetResponse200', 'json');
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