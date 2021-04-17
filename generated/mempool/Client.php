<?php

namespace Pezos\Generated\Mempool;

class Client extends \Pezos\Generated\Mempool\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getFilter(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Mempool\Endpoint\GetFilter(), $fetch);
    }
    /**
     * Set the configuration of the mempool filter.
     *
     * @param null|mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postFilter($requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Mempool\Endpoint\PostFilter($requestBody), $fetch);
    }
    /**
     * Monitor the mempool operations.
     *
     * @param array $queryParameters {
     *     @var string $applied Include applied operations (set by default)
     *     @var string $refused Include refused operations
     *     @var string $branch_refused Include branch refused operations
     *     @var string $branch_delayed Include branch delayed operations (set by default)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Mempool\Model\NextOperation[]|\Psr\Http\Message\ResponseInterface
     */
    public function getMonitorOperations(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Mempool\Endpoint\GetMonitorOperations($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPendingOperation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Mempool\Endpoint\GetPendingOperation(), $fetch);
    }
    /**
     * Request the operations of your peers.
     *
     * @param null|\Pezos\Generated\Mempool\Model\RequestOperationsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Pezos\Generated\Mempool\Model\RequestOperationsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postRequestOperation(?\Pezos\Generated\Mempool\Model\RequestOperationsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Pezos\Generated\Mempool\Endpoint\PostRequestOperation($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Pezos\Generated\Mempool\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}