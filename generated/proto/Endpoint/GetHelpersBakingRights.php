<?php

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetHelpersBakingRights extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    /**
    * Retrieves the list of delegates allowed to bake a block.
    By default, it gives the best baking priorities for bakers that have at least one opportunity below the 64th priority for the next block.
    Parameters `level` and `cycle` can be used to specify the (valid) level(s) in the past or future at which the baking rights have to be returned. When asked for (a) whole cycle(s), baking opportunities are given by default up to the priority 8.
    Parameter `delegate` can be used to restrict the results to the given delegates. If parameter `all` is set, all the baking opportunities for each baker at each level are returned, instead of just the first one.
    Returns the list of baking slots. Also returns the minimal timestamps that correspond to these slots. The timestamps are omitted for levels in the past, and are only estimates for levels later that the next block, based on the hypothesis that all predecessor blocks were baked at the first priority.
    *
    * @param array $queryParameters {
    *     @var string $level A level integer
    *     @var string $cycle A cycle integer
    *     @var string $delegate A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
    *     @var string $max_priority 
    *     @var string $all 
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
        return '/helpers/baking_rights';
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
        $optionsResolver->setDefined(array('level', 'cycle', 'delegate', 'max_priority', 'all'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('level', array('string'));
        $optionsResolver->setAllowedTypes('cycle', array('string'));
        $optionsResolver->setAllowedTypes('delegate', array('string'));
        $optionsResolver->setAllowedTypes('max_priority', array('string'));
        $optionsResolver->setAllowedTypes('all', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersBakingRightsGetResponse200Item[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersBakingRightsGetResponse200Item[]', 'json');
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