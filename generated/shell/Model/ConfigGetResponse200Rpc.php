<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Model;

class ConfigGetResponse200Rpc extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Hosts to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @var list<mixed>
     */
    protected $listenAddrs;
    /**
     * Hosts to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @var list<mixed>
     */
    protected $externalListenAddrs;
    /**
     * Legacy value: Host to listen to.
     */
    protected $listenAddr;
    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @var list<mixed>
     */
    protected $corsOrigin;
    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @var list<mixed>
     */
    protected $corsHeaders;
    /**
     * Certificate file (necessary when TLS is used).
     */
    protected $crt;
    /**
     * Key file (necessary when TLS is used).
     */
    protected $key;
    /**
     * A list of RPC ACLs for specific listening addresses.
     *
     * @var list<mixed>
     */
    protected $acl;
    /**
     * The media types supported by the server.
     *
     * @var string
     */
    protected $mediaType;
    /**
     * The maximum number of active connections per RPC endpoint.
     */
    protected $maxActiveRpcConnections;
    /**
     * Enables HTTP cache headers in the RPC response. When enabled, 'Cache-control' will be present with 'max-age' in the response header of relative queries (eg. head, head-n, head~n). The 'max-age' value indicates the duration of which the returned response is cacheable. It is an estimate of the remaining duration of the current round based on when the block was forged. Enabling this feature adds a performance overhead to all queries hence you should only do so if you are running the RPC server behind a caching server. The feature is implemented based on RFC9111 hence useful for reverse proxies with auto-caching mechanism.
     *
     * @var bool
     */
    protected $enableHttpCacheHeaders;

    /**
     * Hosts to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @return list<mixed>
     */
    public function getListenAddrs(): array
    {
        return $this->listenAddrs;
    }

    /**
     * Hosts to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @param list<mixed> $listenAddrs
     */
    public function setListenAddrs(array $listenAddrs): self
    {
        $this->initialized['listenAddrs'] = true;
        $this->listenAddrs = $listenAddrs;

        return $this;
    }

    /**
     * Hosts to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @return list<mixed>
     */
    public function getExternalListenAddrs(): array
    {
        return $this->externalListenAddrs;
    }

    /**
     * Hosts to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @param list<mixed> $externalListenAddrs
     */
    public function setExternalListenAddrs(array $externalListenAddrs): self
    {
        $this->initialized['externalListenAddrs'] = true;
        $this->externalListenAddrs = $externalListenAddrs;

        return $this;
    }

    /**
     * Legacy value: Host to listen to.
     */
    public function getListenAddr()
    {
        return $this->listenAddr;
    }

    /**
     * Legacy value: Host to listen to.
     */
    public function setListenAddr($listenAddr): self
    {
        $this->initialized['listenAddr'] = true;
        $this->listenAddr = $listenAddr;

        return $this;
    }

    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @return list<mixed>
     */
    public function getCorsOrigin(): array
    {
        return $this->corsOrigin;
    }

    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @param list<mixed> $corsOrigin
     */
    public function setCorsOrigin(array $corsOrigin): self
    {
        $this->initialized['corsOrigin'] = true;
        $this->corsOrigin = $corsOrigin;

        return $this;
    }

    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @return list<mixed>
     */
    public function getCorsHeaders(): array
    {
        return $this->corsHeaders;
    }

    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @param list<mixed> $corsHeaders
     */
    public function setCorsHeaders(array $corsHeaders): self
    {
        $this->initialized['corsHeaders'] = true;
        $this->corsHeaders = $corsHeaders;

        return $this;
    }

    /**
     * Certificate file (necessary when TLS is used).
     */
    public function getCrt()
    {
        return $this->crt;
    }

    /**
     * Certificate file (necessary when TLS is used).
     */
    public function setCrt($crt): self
    {
        $this->initialized['crt'] = true;
        $this->crt = $crt;

        return $this;
    }

    /**
     * Key file (necessary when TLS is used).
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Key file (necessary when TLS is used).
     */
    public function setKey($key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;

        return $this;
    }

    /**
     * A list of RPC ACLs for specific listening addresses.
     *
     * @return list<mixed>
     */
    public function getAcl(): array
    {
        return $this->acl;
    }

    /**
     * A list of RPC ACLs for specific listening addresses.
     *
     * @param list<mixed> $acl
     */
    public function setAcl(array $acl): self
    {
        $this->initialized['acl'] = true;
        $this->acl = $acl;

        return $this;
    }

    /**
     * The media types supported by the server.
     */
    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    /**
     * The media types supported by the server.
     */
    public function setMediaType(string $mediaType): self
    {
        $this->initialized['mediaType'] = true;
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * The maximum number of active connections per RPC endpoint.
     */
    public function getMaxActiveRpcConnections()
    {
        return $this->maxActiveRpcConnections;
    }

    /**
     * The maximum number of active connections per RPC endpoint.
     */
    public function setMaxActiveRpcConnections($maxActiveRpcConnections): self
    {
        $this->initialized['maxActiveRpcConnections'] = true;
        $this->maxActiveRpcConnections = $maxActiveRpcConnections;

        return $this;
    }

    /**
     * Enables HTTP cache headers in the RPC response. When enabled, 'Cache-control' will be present with 'max-age' in the response header of relative queries (eg. head, head-n, head~n). The 'max-age' value indicates the duration of which the returned response is cacheable. It is an estimate of the remaining duration of the current round based on when the block was forged. Enabling this feature adds a performance overhead to all queries hence you should only do so if you are running the RPC server behind a caching server. The feature is implemented based on RFC9111 hence useful for reverse proxies with auto-caching mechanism.
     */
    public function getEnableHttpCacheHeaders(): bool
    {
        return $this->enableHttpCacheHeaders;
    }

    /**
     * Enables HTTP cache headers in the RPC response. When enabled, 'Cache-control' will be present with 'max-age' in the response header of relative queries (eg. head, head-n, head~n). The 'max-age' value indicates the duration of which the returned response is cacheable. It is an estimate of the remaining duration of the current round based on when the block was forged. Enabling this feature adds a performance overhead to all queries hence you should only do so if you are running the RPC server behind a caching server. The feature is implemented based on RFC9111 hence useful for reverse proxies with auto-caching mechanism.
     */
    public function setEnableHttpCacheHeaders(bool $enableHttpCacheHeaders): self
    {
        $this->initialized['enableHttpCacheHeaders'] = true;
        $this->enableHttpCacheHeaders = $enableHttpCacheHeaders;

        return $this;
    }
}
