<?php

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class PostContextContractsByContractIdStorageNormalized extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    protected $contract_id;
    /**
     * Access the data of the contract and normalize it using the requested unparsing mode.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdStorageNormalizedPostBody $requestBody 
     */
    public function __construct(string $contractId, ?\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdStorageNormalizedPostBody $requestBody = null)
    {
        $this->contract_id = $contractId;
        $this->body = $requestBody;
    }
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{contract_id}'), array($this->contract_id), '/context/contracts/{contract_id}/storage/normalized');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdStorageNormalizedPostBody) {
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