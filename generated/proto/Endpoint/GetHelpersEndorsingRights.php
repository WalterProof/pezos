<?php

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetHelpersEndorsingRights extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    /**
    * Retrieves the delegates allowed to endorse a block.
    By default, it gives the endorsement slots for delegates that have at least one in the next block.
    Parameters `level` and `cycle` can be used to specify the (valid) level(s) in the past or future at which the endorsement rights have to be returned. Parameter `delegate` can be used to restrict the results to the given delegates.
    Returns the list of endorsement slots. Also returns the minimal timestamps that correspond to these slots. The timestamps are omitted for levels in the past, and are only estimates for levels later that the next block, based on the hypothesis that all predecessor blocks were baked at the first priority.
    *
    * @param array $queryParameters {
    *     @var string $level A level integer
    *     @var string $cycle A cycle integer
    *     @var string $delegate A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
    * }
    */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/helpers/endorsing_rights';
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
        $optionsResolver->setDefined(array('level', 'cycle', 'delegate'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('level', array('string'));
        $optionsResolver->setAllowedTypes('cycle', array('string'));
        $optionsResolver->setAllowedTypes('delegate', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersEndorsingRightsGetResponse200Item[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersEndorsingRightsGetResponse200Item[]', 'json');
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