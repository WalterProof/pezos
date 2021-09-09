<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Http\TezTools;

use Bzzhh\Pezos\Http\PluginFactory;
use Bzzhh\Pezos\Http\TezTools\Response\ContractsGetResponse200;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class Client
{
    private ClientInterface $httpClient;
    private RequestFactoryInterface $requestFactory;
    private SerializerInterface $serializer;
    private StreamFactoryInterface $streamFactory;

    public function __construct(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        SerializerInterface $serializer,
        StreamFactoryInterface $streamFactory
    ) {
        $this->httpClient     = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->serializer     = $serializer;
        $this->streamFactory  = $streamFactory;
    }

    public static function create()
    {
        $httpClient = Psr18ClientDiscovery::find();

        $httpClient = new \Http\Client\Common\PluginClient($httpClient, [
            PluginFactory::createHostPlugin('https://api.teztools.io'),
            PluginFactory::createPathPlugin('v1'),
        ]);

        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory  = Psr17FactoryDiscovery::findStreamFactory();
        $serializer     = new Serializer(
            [new ArrayDenormalizer(), new ObjectNormalizer()],
            [
                new JsonEncoder(
                    new JsonEncode(),
                    new JsonDecode([
                        'json_decode_associative' => true,
                    ]),
                ),
            ],
        );

        return new static(
            $httpClient,
            $requestFactory,
            $serializer,
            $streamFactory,
        );
    }

    public function fetchContracts()
    {
        $request  = $this->requestFactory->createRequest('GET', '/contracts');
        $response = $this->httpClient->sendRequest($request);

        $contractsResponse = $this->serializer->deserialize(
            $response->getBody()->getContents(),
            ContractsGetResponse200::class,
            'json',
        );

        return $contractsResponse->getContracts();
    }
}
