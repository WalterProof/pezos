<?php

namespace Bzzhh\Pezos\Generated\Proto;

class Client extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\GetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function get(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\Get(), $fetch);
    }
    /**
     * Access the value associated with a key in a big map.
     *
     * @param string $bigMapId A big map identifier
     * @param string $scriptExpr script_expr (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextBigMapByBigMapIdByScriptExpr(string $bigMapId, string $scriptExpr, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextBigMapByBigMapIdByScriptExpr($bigMapId, $scriptExpr), $fetch);
    }
    /**
     * Access the value associated with a key in a big map, normalize the output using the requested unparsing mode.
     *
     * @param string $bigMapId A big map identifier
     * @param string $scriptExpr script_expr (Base58Check-encoded)
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\ContextBigMapsBigMapIdScriptExprNormalizedPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postContextBigMapsByBigMapIdByScriptExprNormalized(string $bigMapId, string $scriptExpr, ?\Bzzhh\Pezos\Generated\Proto\Model\ContextBigMapsBigMapIdScriptExprNormalizedPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostContextBigMapsByBigMapIdByScriptExprNormalized($bigMapId, $scriptExpr, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\ContextConstantsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getContextConstant(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextConstant(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextConstantsError(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextConstantsError(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContracts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContracts(), $fetch);
    }
    /**
     * Access the complete status of a contract.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContractByContractId(string $contractId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContractByContractId($contractId), $fetch);
    }
    /**
     * Access the balance of a contract.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContractsByContractIdBalance(string $contractId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContractsByContractIdBalance($contractId), $fetch);
    }
    /**
     * Access the value associated with a key in a big map of the contract (deprecated).
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdBigMapGetPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postContextContractsByContractIdBigMapGet(string $contractId, ?\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdBigMapGetPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostContextContractsByContractIdBigMapGet($contractId, $requestBody), $fetch);
    }
    /**
     * Access the counter of a contract, if any.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContractsByContractIdCounter(string $contractId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContractsByContractIdCounter($contractId), $fetch);
    }
    /**
     * Access the delegate of a contract, if any.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContractsByContractIdDelegate(string $contractId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContractsByContractIdDelegate($contractId), $fetch);
    }
    /**
     * Return the list of entrypoints of the contract
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdEntrypointsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContractsByContractIdEntrypoint(string $contractId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContractsByContractIdEntrypoint($contractId), $fetch);
    }
    /**
     * Return the type of the given entrypoint of the contract
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param string $string 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContractsByContractIdEntrypointByString(string $contractId, string $string, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContractsByContractIdEntrypointByString($contractId, $string), $fetch);
    }
    /**
     * Access the manager of a contract.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContractsByContractIdManagerKey(string $contractId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContractsByContractIdManagerKey($contractId), $fetch);
    }
    /**
     * Access the code and data of the contract.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\_008PtEdo2ZkScriptedContracts|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContractsByContractIdScript(string $contractId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContractsByContractIdScript($contractId), $fetch);
    }
    /**
     * Access the script of the contract and normalize it using the requested unparsing mode.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdScriptNormalizedPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postContextContractsByContractIdScriptNormalized(string $contractId, ?\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdScriptNormalizedPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostContextContractsByContractIdScriptNormalized($contractId, $requestBody), $fetch);
    }
    /**
     * Returns the root and a diff of a state starting from an optional offset which is zero by default.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param array $queryParameters {
     *     @var string $offset_commitment Commitments and ciphertexts are returned from the specified offset up to the most recent.
     *     @var string $offset_nullifier Nullifiers are returned from the specified offset up to the most recent.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdSingleSaplingGetDiffGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContractsByContractIdSingleSaplingGetDiff(string $contractId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContractsByContractIdSingleSaplingGetDiff($contractId, $queryParameters), $fetch);
    }
    /**
     * Access the data of the contract.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextContractsByContractIdStorage(string $contractId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextContractsByContractIdStorage($contractId), $fetch);
    }
    /**
     * Access the data of the contract and normalize it using the requested unparsing mode.
     *
     * @param string $contractId A contract identifier encoded in b58check.
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdStorageNormalizedPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postContextContractsByContractIdStorageNormalized(string $contractId, ?\Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdStorageNormalizedPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostContextContractsByContractIdStorageNormalized($contractId, $requestBody), $fetch);
    }
    /**
     * Lists all registered delegates.
     *
     * @param array $queryParameters {
     *     @var string $active 
     *     @var string $inactive 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegates(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegates($queryParameters), $fetch);
    }
    /**
     * Everything about a delegate.
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\ContextDelegatesPkhGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegateByPkh(string $pkh, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegateByPkh($pkh), $fetch);
    }
    /**
     * Returns the full balance of a given delegate, including the frozen balances.
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegatesByPkhBalance(string $pkh, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegatesByPkhBalance($pkh), $fetch);
    }
    /**
     * Tells whether the delegate is currently tagged as deactivated or not.
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegatesByPkhDeactivated(string $pkh, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegatesByPkhDeactivated($pkh), $fetch);
    }
    /**
     * Returns the balances of all the contracts that delegate to a given delegate. This excludes the delegate's own balance and its frozen balances.
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegatesByPkhDelegatedBalance(string $pkh, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegatesByPkhDelegatedBalance($pkh), $fetch);
    }
    /**
     * Returns the list of contracts that delegate to a given delegate.
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegatesByPkhDelegatedContracts(string $pkh, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegatesByPkhDelegatedContracts($pkh), $fetch);
    }
    /**
     * Returns the total frozen balances of a given delegate, this includes the frozen deposits, rewards and fees.
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegatesByPkhFrozenBalance(string $pkh, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegatesByPkhFrozenBalance($pkh), $fetch);
    }
    /**
     * Returns the frozen balances of a given delegate, indexed by the cycle by which it will be unfrozen
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\ContextDelegatesPkhFrozenBalanceByCycleGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegatesByPkhFrozenBalanceByCycle(string $pkh, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegatesByPkhFrozenBalanceByCycle($pkh), $fetch);
    }
    /**
     * Returns the cycle by the end of which the delegate might be deactivated if she fails to execute any delegate action. A deactivated delegate might be reactivated (without loosing any rolls) by simply re-registering as a delegate. For deactivated delegates, this value contains the cycle by which they were deactivated.
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegatesByPkhGracePeriod(string $pkh, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegatesByPkhGracePeriod($pkh), $fetch);
    }
    /**
     * Returns the total amount of tokens delegated to a given delegate. This includes the balances of all the contracts that delegate to it, but also the balance of the delegate itself and its frozen fees and deposits. The rewards do not count in the delegated balance until they are unfrozen.
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegatesByPkhStakingBalance(string $pkh, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegatesByPkhStakingBalance($pkh), $fetch);
    }
    /**
     * The number of rolls in the vote listings for a given delegate
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextDelegatesByPkhVotingPower(string $pkh, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextDelegatesByPkhVotingPower($pkh), $fetch);
    }
    /**
     * Info about the nonce of a previous block.
     *
     * @param string $blockLevel A level integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextNonceByBlockLevel(string $blockLevel, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextNonceByBlockLevel($blockLevel), $fetch);
    }
    /**
     * Returns the raw context.
     *
     * @param array $queryParameters {
     *     @var string $depth 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getContextRawByte(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextRawByte($queryParameters), $fetch);
    }
    /**
     * Returns the root and a diff of a state starting from an optional offset which is zero by default.
     *
     * @param string $saplingStateId A sapling state identifier
     * @param array $queryParameters {
     *     @var string $offset_commitment Commitments and ciphertexts are returned from the specified offset up to the most recent.
     *     @var string $offset_nullifier Nullifiers are returned from the specified offset up to the most recent.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\ContextSaplingSaplingStateIdGetDiffGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getContextSaplingBySaplingStateIdGetDiff(string $saplingStateId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetContextSaplingBySaplingStateIdGetDiff($saplingStateId, $queryParameters), $fetch);
    }
    /**
     * Seed of the cycle to which the block belongs.
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\ContextSeedPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postContextSeed(?\Bzzhh\Pezos\Generated\Proto\Model\ContextSeedPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostContextSeed($requestBody), $fetch);
    }
    /**
     * Get the endorsing power of an endorsement, that is, the number of slots that the endorser has
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\EndorsingPowerPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postEndorsingPower(?\Bzzhh\Pezos\Generated\Proto\Model\EndorsingPowerPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostEndorsingPower($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getHash(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHash(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\BlockHeader|\Psr\Http\Message\ResponseInterface
     */
    public function getHeader(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHeader(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HeaderProtocolDataGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getHeaderProtocolDatum(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHeaderProtocolDatum(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getHeaderProtocolDataRaw(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHeaderProtocolDataRaw(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getHeaderRaw(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHeaderRaw(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\BlockHeaderShell|\Psr\Http\Message\ResponseInterface
     */
    public function getHeaderShell(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHeaderShell(), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersBakingRightsGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
    */
    public function getHelpersBakingRights(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHelpersBakingRights($queryParameters), $fetch);
    }
    /**
     * Try to complete a prefix of a Base58Check-encoded data. This RPC is actually able to complete hashes of block, operations, public_keys and contracts.
     *
     * @param string $prefix 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getHelpersCompleteByPrefix(string $prefix, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHelpersCompleteByPrefix($prefix), $fetch);
    }
    /**
     * Returns the level of the interrogated block, or the one of a block located `offset` blocks after in the chain (or before when negative). For instance, the next block if `offset` is 1.
     *
     * @param array $queryParameters {
     *     @var string $offset 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersCurrentLevelGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getHelpersCurrentLevel(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHelpersCurrentLevel($queryParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersEndorsingRightsGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
    */
    public function getHelpersEndorsingRights(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHelpersEndorsingRights($queryParameters), $fetch);
    }
    /**
     * Forge an operation
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\_008PtEdo2ZkOperationAlphaUnsignedOperation $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersForgeOperation(?\Bzzhh\Pezos\Generated\Proto\Model\_008PtEdo2ZkOperationAlphaUnsignedOperation $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersForgeOperation($requestBody), $fetch);
    }
    /**
     * Forge the protocol-specific part of a block header
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersForgeProtocolDataPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersForgeProtocolDataPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersForgeProtocolDatum(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersForgeProtocolDataPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersForgeProtocolDatum($requestBody), $fetch);
    }
    /**
     * Forge a block header
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\BlockHeader $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersForgeBlockHeaderPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersForgeBlockHeader(?\Bzzhh\Pezos\Generated\Proto\Model\BlockHeader $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersForgeBlockHeader($requestBody), $fetch);
    }
    /**
     * Levels of a cycle
     *
     * @param array $queryParameters {
     *     @var string $offset 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersLevelsInCurrentCycleGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getHelpersLevelsInCurrentCycle(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetHelpersLevelsInCurrentCycle($queryParameters), $fetch);
    }
    /**
     * Parse a block
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\BlockHeader $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\_008PtEdo2ZkBlockHeaderAlphaSignedContents|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersParseBlock(?\Bzzhh\Pezos\Generated\Proto\Model\BlockHeader $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersParseBlock($requestBody), $fetch);
    }
    /**
     * Parse operations
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersParseOperationsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersParseOperationsPostResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersParseOperations(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersParseOperationsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersParseOperations($requestBody), $fetch);
    }
    /**
     * Simulate the validation of a block that would contain the given operations and return the resulting fitness and context hash.
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostBody $requestBody 
     * @param array $queryParameters {
     *     @var string $sort 
     *     @var string $timestamp A date in seconds from epoch
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersPreapplyBlock(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersPreapplyBlockPostBody $requestBody = null, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersPreapplyBlock($requestBody, $queryParameters), $fetch);
    }
    /**
     * Simulate the validation of an operation.
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\NextOperation[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersPreapplyOperations(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersPreapplyOperations($requestBody), $fetch);
    }
    /**
     * Return the type of the given entrypoint
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsEntrypointPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsEntrypointPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsEntrypoint(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsEntrypointPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsEntrypoint($requestBody), $fetch);
    }
    /**
     * Normalizes some data expression using the requested unparsing mode
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsNormalizeDataPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsNormalizeDataPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsNormalizeDatum(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsNormalizeDataPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsNormalizeDatum($requestBody), $fetch);
    }
    /**
     * Normalizes a Michelson script using the requested unparsing mode
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsNormalizeScriptPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsNormalizeScriptPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsNormalizeScript(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsNormalizeScriptPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsNormalizeScript($requestBody), $fetch);
    }
    /**
     * Normalizes some Michelson type by expanding `pair a b c` as `pair a (pair b c)
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsNormalizeTypePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsNormalizeTypePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsNormalizeType(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsNormalizeTypePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsNormalizeType($requestBody), $fetch);
    }
    /**
     * Computes the serialized version of some data expression using the same algorithm as script instruction PACK
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsPackDataPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsPackDataPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsPackDatum(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsPackDataPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsPackDatum($requestBody), $fetch);
    }
    /**
     * Run a piece of code in the current context
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsRunCodePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsRunCodePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsRunCode(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsRunCodePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsRunCode($requestBody), $fetch);
    }
    /**
     * Run a piece of code in the current context, normalize the output using the requested unparsing mode.
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsRunCodeNormalizedPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsRunCodeNormalizedPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsRunCodeNormalized(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsRunCodeNormalizedPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsRunCodeNormalized($requestBody), $fetch);
    }
    /**
     * Run an operation without signature checks
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsRunOperationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsRunOperation(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsRunOperationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsRunOperation($requestBody), $fetch);
    }
    /**
     * Run a piece of code in the current context, keeping a trace
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTraceCodePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTraceCodePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsTraceCode(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTraceCodePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsTraceCode($requestBody), $fetch);
    }
    /**
     * Run a piece of code in the current context, keeping a trace, normalize the output using the requested unparsing mode.
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTraceCodeNormalizedPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTraceCodeNormalizedPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsTraceCodeNormalized(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTraceCodeNormalizedPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsTraceCodeNormalized($requestBody), $fetch);
    }
    /**
     * Typecheck a piece of code in the current context
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTypecheckCodePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTypecheckCodePostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsTypecheckCode(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTypecheckCodePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsTypecheckCode($requestBody), $fetch);
    }
    /**
     * Check that some data expression is well formed and of a given type in the current context
     *
     * @param null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTypecheckDataPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTypecheckDataPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function postHelpersScriptsTypecheckDatum(?\Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTypecheckDataPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\PostHelpersScriptsTypecheckDatum($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getLiveBlocks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetLiveBlocks(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\BlockHeaderMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getMetadata(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetMetadata(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getMetadataHash(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetMetadataHash(), $fetch);
    }
    /**
     * Minimal valid time for a block given a priority and an endorsing power.
     *
     * @param array $queryParameters {
     *     @var string $priority 
     *     @var string $endorsing_power 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getMinimalValidTime(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetMinimalValidTime($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOperationHashes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetOperationHashes(), $fetch);
    }
    /**
     * All the operations included in `n-th` validation pass of the block.
     *
     * @param string $listOffset Index `n` of the requested validation pass.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOperationHashesByListOffset(string $listOffset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetOperationHashesByListOffset($listOffset), $fetch);
    }
    /**
     * The hash of then `m-th` operation in the `n-th` validation pass of the block.
     *
     * @param string $listOffset Index `n` of the requested validation pass.
     * @param string $operationOffset Index `m` of the requested operation in its validation pass.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOperationHashByListOffsetByOperationOffset(string $listOffset, string $operationOffset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetOperationHashByListOffsetByOperationOffset($listOffset, $operationOffset), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOperationMetadataHashes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetOperationMetadataHashes(), $fetch);
    }
    /**
     * All the operation metadata included in `n-th` validation pass of the block. This is only set on blocks starting from environment V1.
     *
     * @param string $listOffset Index `n` of the requested validation pass.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOperationMetadataHashesByListOffset(string $listOffset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetOperationMetadataHashesByListOffset($listOffset), $fetch);
    }
    /**
     * The hash of then `m-th` operation metadata in the `n-th` validation pass of the block. This is only set on blocks starting from environment V1.
     *
     * @param string $listOffset Index `n` of the requested validation pass.
     * @param string $operationOffset Index `m` of the requested operation in its validation pass.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOperationMetadataHashByListOffsetByOperationOffset(string $listOffset, string $operationOffset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetOperationMetadataHashByListOffsetByOperationOffset($listOffset, $operationOffset), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOperations(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetOperations(), $fetch);
    }
    /**
     * All the operations included in `n-th` validation pass of the block.
     *
     * @param string $listOffset Index `n` of the requested validation pass.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOperationsByListOffset(string $listOffset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetOperationsByListOffset($listOffset), $fetch);
    }
    /**
     * The `m-th` operation in the `n-th` validation pass of the block.
     *
     * @param string $listOffset Index `n` of the requested validation pass.
     * @param string $operationOffset Index `m` of the requested operation in its validation pass.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOperationByListOffsetByOperationOffset(string $listOffset, string $operationOffset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetOperationByListOffsetByOperationOffset($listOffset, $operationOffset), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOperationsMetadataHash(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetOperationsMetadataHash(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\ProtocolsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getProtocol(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetProtocol(), $fetch);
    }
    /**
     * Minimum number of endorsements for a block to be valid, given a delay of the block's timestamp with respect to the minimum time to bake at the block's priority
     *
     * @param array $queryParameters {
     *     @var string $block_delay 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getRequiredEndorsement(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetRequiredEndorsement($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\VotesBallotListGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getVotesBallotList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetVotesBallotList(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\VotesBallotsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getVotesBallot(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetVotesBallot(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\VotesCurrentPeriodGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getVotesCurrentPeriod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetVotesCurrentPeriod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getVotesCurrentPeriodKind(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetVotesCurrentPeriodKind(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getVotesCurrentProposal(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetVotesCurrentProposal(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getVotesCurrentQuorum(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetVotesCurrentQuorum(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\VotesListingsGetResponse200Item[]|\Psr\Http\Message\ResponseInterface
     */
    public function getVotesListings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetVotesListings(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getVotesProposals(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetVotesProposals(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Bzzhh\Pezos\Generated\Proto\Model\VotesSuccessorPeriodGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getVotesSuccessorPeriod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetVotesSuccessorPeriod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getVotesTotalVotingPower(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Bzzhh\Pezos\Generated\Proto\Endpoint\GetVotesTotalVotingPower(), $fetch);
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
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Bzzhh\Pezos\Generated\Proto\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}