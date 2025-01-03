<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Endpoint;

class GetContextSmartRollupsSmartRollupBySmartRollupAddressCommitmentBySmartRollupCommitmentHashCanBeCemented extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $smart_rollup_address;
    protected $smart_rollup_commitment_hash;

    /**
     * Returns true if and only if the provided commitment can be cemented.
     *
     * @param string $smartRollupAddress        smart_rollup_address (Base58Check-encoded)
     * @param string $smartRollupCommitmentHash smart_rollup_commitment_hash (Base58Check-encoded)
     */
    public function __construct(string $smartRollupAddress, string $smartRollupCommitmentHash)
    {
        $this->smart_rollup_address = $smartRollupAddress;
        $this->smart_rollup_commitment_hash = $smartRollupCommitmentHash;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{smart_rollup_address}', '{smart_rollup_commitment_hash}'], [$this->smart_rollup_address, $this->smart_rollup_commitment_hash], '/context/smart_rollups/smart_rollup/{smart_rollup_address}/commitment/{smart_rollup_commitment_hash}/can_be_cemented');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
