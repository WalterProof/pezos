<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Mempool\Endpoint;

class GetFilter extends \Pezos\Generated\Mempool\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Mempool\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Mempool\Runtime\Client\EndpointTrait;

    /**
     * Get the configuration of the mempool's filter and bounds. Values of the form [ "21", "20" ] are rational numbers given as a numerator and a denominator, e.g. 21/20 = 1.05. The minimal_fees (in mutez), minimal_nanotez_per_gas_unit, and minimal_nanotez_per_byte are requirements that a manager operation must meet to be considered by the mempool. replace_by_fee_factor is how much better a manager operation must be to replace a previous valid operation **from the same manager** (both its fee and its fee/gas ratio must exceed the old operation's by at least this factor). max_operations and max_total_bytes are the bounds on respectively the number of valid operations in the mempool and the sum of their sizes in bytes.
     *
     * @param array $queryParameters {
     *
     * @var string $include_default Show fields equal to their default value (set by default)
     *             }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/filter';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['include_default']);
        $optionsResolver->setRequired(['include_default']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('include_default', ['string']);

        return $optionsResolver;
    }

    /**
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
