<?php

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetContextContractsByContractIdEntrypointByString extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    protected $contract_id;
    protected $string;
    /**
     * Return the type of the given entrypoint of the contract
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param string $string 
     */
    public function __construct(string $contractId, string $string)
    {
        $this->contract_id = $contractId;
        $this->string = $string;
    }
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{contract_id}', '{string}'), array($this->contract_id, $this->string), '/context/contracts/{contract_id}/entrypoints/{string}');
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