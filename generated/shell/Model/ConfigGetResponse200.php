<?php

namespace Pezos\Generated\Shell\Model;

class ConfigGetResponse200
{
    /**
     * Location of the data dir on disk.
     *
     * @var mixed
     */
    protected $dataDir;
    /**
     * Configuration of rpc parameters
     *
     * @var ConfigGetResponse200Rpc
     */
    protected $rpc;
    /**
     * Configuration of network parameters
     *
     * @var ConfigGetResponse200P2p
     */
    protected $p2p;
    /**
     * Configuration of the Lwt-log sink (part of the logging framework)
     *
     * @var ConfigGetResponse200Log
     */
    protected $log;
    /**
     * Configuration of the structured logging framework
     *
     * @var ConfigGetResponse200InternalEvents
     */
    protected $internalEvents;
    /**
     * Configuration of network parameters
     *
     * @var ConfigGetResponse200Shell
     */
    protected $shell;
    /**
     * Configuration of which network/blockchain to connect to
     *
     * @var mixed
     */
    protected $network;
    /**
     * Location of the data dir on disk.
     *
     * @return mixed
     */
    public function getDataDir()
    {
        return $this->dataDir;
    }
    /**
     * Location of the data dir on disk.
     *
     * @param mixed $dataDir
     *
     * @return self
     */
    public function setDataDir($dataDir) : self
    {
        $this->dataDir = $dataDir;
        return $this;
    }
    /**
     * Configuration of rpc parameters
     *
     * @return ConfigGetResponse200Rpc
     */
    public function getRpc() : ConfigGetResponse200Rpc
    {
        return $this->rpc;
    }
    /**
     * Configuration of rpc parameters
     *
     * @param ConfigGetResponse200Rpc $rpc
     *
     * @return self
     */
    public function setRpc(ConfigGetResponse200Rpc $rpc) : self
    {
        $this->rpc = $rpc;
        return $this;
    }
    /**
     * Configuration of network parameters
     *
     * @return ConfigGetResponse200P2p
     */
    public function getP2p() : ConfigGetResponse200P2p
    {
        return $this->p2p;
    }
    /**
     * Configuration of network parameters
     *
     * @param ConfigGetResponse200P2p $p2p
     *
     * @return self
     */
    public function setP2p(ConfigGetResponse200P2p $p2p) : self
    {
        $this->p2p = $p2p;
        return $this;
    }
    /**
     * Configuration of the Lwt-log sink (part of the logging framework)
     *
     * @return ConfigGetResponse200Log
     */
    public function getLog() : ConfigGetResponse200Log
    {
        return $this->log;
    }
    /**
     * Configuration of the Lwt-log sink (part of the logging framework)
     *
     * @param ConfigGetResponse200Log $log
     *
     * @return self
     */
    public function setLog(ConfigGetResponse200Log $log) : self
    {
        $this->log = $log;
        return $this;
    }
    /**
     * Configuration of the structured logging framework
     *
     * @return ConfigGetResponse200InternalEvents
     */
    public function getInternalEvents() : ConfigGetResponse200InternalEvents
    {
        return $this->internalEvents;
    }
    /**
     * Configuration of the structured logging framework
     *
     * @param ConfigGetResponse200InternalEvents $internalEvents
     *
     * @return self
     */
    public function setInternalEvents(ConfigGetResponse200InternalEvents $internalEvents) : self
    {
        $this->internalEvents = $internalEvents;
        return $this;
    }
    /**
     * Configuration of network parameters
     *
     * @return ConfigGetResponse200Shell
     */
    public function getShell() : ConfigGetResponse200Shell
    {
        return $this->shell;
    }
    /**
     * Configuration of network parameters
     *
     * @param ConfigGetResponse200Shell $shell
     *
     * @return self
     */
    public function setShell(ConfigGetResponse200Shell $shell) : self
    {
        $this->shell = $shell;
        return $this;
    }
    /**
     * Configuration of which network/blockchain to connect to
     *
     * @return mixed
     */
    public function getNetwork()
    {
        return $this->network;
    }
    /**
     * Configuration of which network/blockchain to connect to
     *
     * @param mixed $network
     *
     * @return self
     */
    public function setNetwork($network) : self
    {
        $this->network = $network;
        return $this;
    }
}